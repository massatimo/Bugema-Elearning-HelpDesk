# Bugema University Elearning Platform

A lightweight Laravel-based School Management and E‑Learning dashboard for Bugema University.

## Overview

This project provides a simple administrative dashboard to manage students, teachers, courses, and basic reports. It also includes a built-in student/teacher dashboard and a floating support widget (WhatsApp popup) for quick assistance.

## Key Features
- User authentication (Laravel Breeze/standard auth)
- Dashboard with modules for Students, Teachers and Reports
- Responsive UI built with Bootstrap 5
- Floating WhatsApp support widget (bottom-right) with message input
- Simple styling utilities and components under `resources/views` and `resources/css`

## Tech Stack
- Backend: PHP 8+, Laravel
- Frontend: Blade templates, Bootstrap 5, Bootstrap Icons, Vite
- Tools: Composer, npm/yarn, Vite

## Local Setup

Prerequisites:
- PHP 8.x, Composer
- Node.js (16+) and npm or yarn
- A database (MySQL, SQLite, etc.)

Quick start:

1. Clone the repository

   git clone <your-repo-url>
   cd bugema-school

2. Install PHP dependencies

   composer install

3. Install frontend dependencies and build assets

   npm install
   npm run build

4. Copy `.env` and generate an app key

   cp .env.example .env
   php artisan key:generate

5. Configure your database in `.env`, then run migrations and seeders (if any)

   php artisan migrate
   php artisan db:seed

6. Serve the app locally

   php artisan serve

Open the app at `http://localhost:8000`.

## WhatsApp Support Widget

- Phone number used: `+256757733205` (see `resources/views/layouts/app.blade.php`). Change it there if needed.
- The widget sends the typed message to WhatsApp via `https://wa.me/`.
- The chat header avatar will use `public/images/logo.png` if you place your Bugema logo there.

## Adding Project Assets

- To add the Bugema logo used in the chat header, copy your image to `public/images/logo.png`.
- If you want a PDF help guide to be served, place it in `public/docs/ODeLHelpDesk.pdf`.

## Tests

- Run PHPUnit / Pest tests (if configured):

  vendor/bin/phpunit

## Contributing

Feel free to open issues or pull requests. Keep changes small and focused.

## License

MIT — see LICENSE file if included.

---

If you want, I can also add this `README.md` to git and create a commit for you; tell me if you want me to run the commit commands here.
<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# Bugema-Elearning-HelpDesk
>>>>>>> e1bc762eb2099eb6f30f3797dccb7e7871442fbe
