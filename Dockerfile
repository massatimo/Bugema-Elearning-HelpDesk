FROM node:18-alpine AS node_builder
WORKDIR /app
COPY package*.json vite.config.js resources/ resources/ \
    resources/js resources/css .
RUN npm ci --silent
COPY . .
RUN npm run build --silent

FROM composer:2 AS composer_builder
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --optimize-autoloader

FROM php:8.2-cli-alpine
WORKDIR /srv/app

RUN apk add --no-cache bash git icu-dev libxml2-dev zlib-dev oniguruma-dev libpng-dev libjpeg-turbo-dev freetype-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath xml opcache gd && \
    apk add --no-cache unzip

COPY --from=composer_builder /app/vendor ./vendor
COPY --from=node_builder /app/public/build ./public/build

COPY . .

RUN chown -R www-data:www-data storage bootstrap/cache || true && \
    chmod -R 775 storage bootstrap/cache || true

ENV APP_ENV=production
ENV APP_DEBUG=false

EXPOSE 10000

CMD ["sh", "-c", "php artisan migrate --force || true; php artisan config:cache || true; php artisan route:cache || true; php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]
