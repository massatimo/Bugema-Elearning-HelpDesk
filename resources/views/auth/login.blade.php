<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Bugema University | Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{

height:100vh;

overflow:hidden;

background:#f5f7fb;

}

.login-page{

display:flex;

height:100vh;

}

/* LEFT */

.left-side{

flex:1;

background:url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1600&q=80');

background-size:cover;

background-position:center;

position:relative;

}

.left-side::before{

content:"";

position:absolute;

inset:0;

background:linear-gradient(135deg,#0D47A1CC,#1976D2CC);

}

.left-content{

position:absolute;

z-index:2;

color:white;

top:50%;

left:50%;

transform:translate(-50%,-50%);

width:80%;

}

.left-content h1{

font-size:52px;

font-weight:700;

margin-bottom:20px;

}

.left-content h4{

font-weight:400;

margin-bottom:20px;

}

.left-content p{

line-height:1.8;

font-size:17px;

}

/* RIGHT */

.right-side{

width:500px;

display:flex;

justify-content:center;

align-items:center;

background:white;

}

.login-card{

width:380px;

}

.logo{

width:90px;

margin-bottom:25px;

}

.login-card h2{

font-weight:700;

margin-bottom:5px;

}

.login-card p{

color:#777;

margin-bottom:35px;

}

.form-control{

height:55px;

border-radius:12px;

}

.input-group-text{

border-radius:12px 0 0 12px;

}

.btn-login{

height:55px;

border-radius:12px;

background:#1565C0;

border:none;

font-size:17px;

font-weight:600;

}

.btn-login:hover{

background:#0D47A1;

}

.footer{

margin-top:25px;

text-align:center;

font-size:14px;

color:#888;

}

@media(max-width:992px){

.left-side{

display:none;

}

.right-side{

width:100%;

}

}

</style>

</head>

<body>

<div class="login-page">

<div class="left-side">

<div class="left-content">

<h1>BUGEMA UNIVERSITY</h1>

<h4>Elearning Platform</h4>

<p>

Welcome to the Bugema University Elearning Platform.

This platform provides students and faculty with access to course materials, assignments, and communication tools to enhance the learning experience.

</p>

</div>

</div>

<div class="right-side">

<div class="login-card">

<div class="text-center">

<img src="{{ asset('images/logo.png') }}"
class="logo"
onerror="this.style.display='none'">

</div>

<h2>Welcome Back</h2>

<p>Sign in to continue</p>

<form method="POST" action="{{ route('login') }}">

@csrf

<div class="mb-3">

<label>Email Address</label>

<input

type="email"

name="email"

class="form-control"

required

autofocus>

</div>

<div class="mb-4">

<label>Password</label>

<div class="input-group">

<input

type="password"

name="password"

id="password"

class="form-control"

required>

<button

type="button"

class="btn btn-outline-secondary"

onclick="togglePassword()">

<i class="bi bi-eye"></i>

</button>

</div>

</div>

<div class="form-check mb-4">

<input class="form-check-input"

type="checkbox"

name="remember"

id="remember">

<label class="form-check-label">

Remember Me

</label>

</div>

<button class="btn btn-primary btn-login w-100">

Login

</button>

@if (Route::has('password.request'))

<div class="text-center mt-3">

<a href="{{ route('password.request') }}">

Forgot your password?

</a>

</div>

@endif

</form>

<div class="footer">

© {{ date('Y') }} Bugema University

</div>

</div>

</div>

</div>

<script>

function togglePassword(){

let p=document.getElementById('password');

if(p.type==="password"){

p.type="text";

}else{

p.type="password";

}

}

</script>

</body>

</html>