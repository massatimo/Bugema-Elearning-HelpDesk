<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bugema University - Elearning Platform</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        body{
            background:#f5f7fb;
            font-family:'Poppins',sans-serif;
        }

        .navbar-custom{
            background:white;
            height:80px;
            box-shadow:0 2px 10px rgba(0,0,0,.06);
        }

        .navbar-brand{
            font-weight:700;
            color:#0D47A1 !important;
            font-size:24px;
        }

        .nav-link{
            font-weight:500;
            color:#444 !important;
            margin:0 8px;
        }

        .nav-link:hover{
            color:#1565C0 !important;
        }

        .page-content{
            padding:40px;
        }

        .user-photo{

            width:42px;
            height:42px;
            border-radius:50%;
            object-fit:cover;

        }

        .dropdown-menu{

            border:none;
            border-radius:16px;
            box-shadow:0 10px 30px rgba(0,0,0,.15);

        }

        .dropdown-item{

            padding:12px 18px;

        }

        .dropdown-item:hover{

            background:#f5f7fb;

        }

        /* Responsive chat panel */
        @media (max-width: 768px){
            .chat-panel{
                left:12px !important;
                right:12px !important;
                width:auto !important;
                height:50vh !important;
                bottom:80px !important;
            }

            .chat-toggle{
                right:12px !important;
                bottom:24px !important;
            }
        }

        /* Hero and modules styling */
        .hero-card{
            border-radius:18px !important;
            overflow:hidden;
            box-shadow:0 18px 40px rgba(13,71,161,0.08);
        }

        .hero-card .bg-primary{
            background: linear-gradient(135deg,#0D47A1 0%, #1976D2 100%) !important;
        }

        .logout-btn{
            border-radius:30px;
            padding:6px 12px;
            box-shadow:0 6px 18px rgba(0,0,0,.08);
        }

        .module-card{
            border-radius:14px;
            transition:transform .18s ease, box-shadow .18s ease;
        }

        .module-card:hover{
            transform:translateY(-6px);
            box-shadow:0 20px 40px rgba(2,6,23,0.08);
        }

        .hero-open{
            padding-left:26px;
            padding-right:26px;
        }
        /* Chat widget styles */
        .chat-toggle{
            position:fixed;
            bottom:12px; /* lowered closer to corner */
            z-index:1060;
            width:56px;
            height:56px;
            border-radius:50%;
            display:inline-flex;
            align-items:center;
            justify-content:center;
            box-shadow:0 8px 22px rgba(0,0,0,.16);
            cursor:pointer;
            color:#fff;
        }

        .chat-toggle-right{ right:20px; }

        /* WhatsApp green for the floating chat icon */
        .chat-toggle.chat-toggle-right{ background:#25D366 !important; border:2px solid rgba(255,255,255,0.08); }
        .chat-toggle.chat-toggle-right i{ color:#fff !important; }
        .chat-toggle-left{ left:20px; }

        /* Vertical support tab (placed mid-right) */
        .support-tab{
            position:fixed;
            top:50%;
            right:12px;
            z-index:1060;
            background:#25D366;
            color:#fff;
            padding:8px 10px;
            border-radius:8px;
            writing-mode:vertical-rl;
            text-orientation:lateral;
            font-weight:700;
            box-shadow:0 8px 24px rgba(0,0,0,.12);
            cursor:pointer;
            user-select:none;
        }

        /* support-fab removed */

        .chat-panel{
            position:fixed;
            bottom:110px;
            right:20px;
            width:320px;
            max-width:calc(100% - 40px);
            height:420px;
            max-height:80vh;
            background:#fff;
            border-radius:12px;
            box-shadow:0 20px 40px rgba(2,6,23,0.12);
            display:none;
            flex-direction:column;
            overflow:hidden;
            z-index:1060;
        }

        .chat-panel.left{ left:20px; right:auto; }

        .chat-panel.open{ display:flex; }

        .chat-header{ padding:12px 16px; border-bottom:1px solid #f1f3f5; display:flex; align-items:center; gap:10px; }
        .chat-messages{ padding:12px; flex:1; overflow-y:auto; background:linear-gradient(180deg,#fbfdff,#f7f9fc); }
        .chat-input{ padding:10px; border-top:1px solid #f1f3f5; display:flex; gap:8px; }
        .chat-bubble{ display:inline-block; padding:8px 12px; border-radius:12px; margin-bottom:8px; max-width:80%; }
        .chat-bubble.user{ background:#0d6efd; color:#fff; margin-left:auto; }
        .chat-bubble.support{ background:#eef2ff; color:#001; }
    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-custom">

<div class="container">

<a class="navbar-brand" href="#">

 BUGEMA UNIVERSITY ELEARNING PLATFORM

</a>

<button class="navbar-toggler"
data-bs-toggle="collapse"
data-bs-target="#navbarNav">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav mx-auto">

<li class="nav-item">
<a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Students</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Teachers</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">Reports</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#">E-Library</a>
</li>

</ul>

<div class="d-flex align-items-center">

<i class="bi bi-bell fs-5 me-3"></i>

<i class="bi bi-chat-dots fs-5 me-3"></i>

<div class="dropdown">

<button
class="btn dropdown-toggle d-flex align-items-center"
type="button"
data-bs-toggle="dropdown"
style="border:none;">

<img
src="https://i.pravatar.cc/100"
class="user-photo me-2">

{{ Auth::user()->name }}

</button>

<ul class="dropdown-menu dropdown-menu-end">

<li class="px-3 py-2">

<strong>{{ Auth::user()->name }}</strong><br>

<small>{{ Auth::user()->email }}</small>

</li>

<li><hr class="dropdown-divider"></li>

<li>

<a class="dropdown-item" href="#">

<i class="bi bi-person"></i>

Profile

</a>

</li>

<li>

<a class="dropdown-item" href="#">

<i class="bi bi-gear"></i>

Settings

</a>

</li>

<li><hr class="dropdown-divider"></li>

<li>

<form action="{{ route('logout') }}" method="POST">

@csrf

<button
type="submit"
class="dropdown-item text-danger">

<i class="bi bi-box-arrow-right"></i>

Logout

</button>

</form>

</li>

</ul>

</div>

</div>

</div>

</div>

</nav>

<div class="page-content">

@yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- cleaned duplicate chat HTML/JS; retained new WhatsApp FAB + popup below -->

        <!-- WhatsApp FAB + Support tab -->
        <div id="supportTab" class="support-tab" title="Support">Support</div>
        <div id="chatToggleRight" class="chat-toggle chat-toggle-right" role="button" title="WhatsApp Support">
            <i class="bi bi-whatsapp fs-5"></i>
        </div>

        <div class="chat-panel" id="chatPanelRight" aria-hidden="true">
            <div class="chat-header" style="background:#075E54;color:#fff;">
                @if (file_exists(public_path('images/logo.png')))
                    <img src="{{ asset('images/logo.png') }}" alt="Bugema" style="width:40px;height:40px;border-radius:50%;object-fit:cover;" class="me-2">
                @else
                    <img src=" " alt="support" style="width:40px;height:40px;border-radius:50%;object-fit:cover;" class="me-2">
                @endif
                <div>
                    <div class="fw-semibold">Bugema Elearning</div>
                    <small>Support Desk</small>
                </div>
                <div class="ms-auto">
                    <button class="btn btn-sm btn-light" id="closeChatRight">Close</button>
                </div>
            </div>
            <div class="chat-messages" id="chatMessagesRight">
                    <div class="chat-bubble support">Hi! 👋 How can we help you today?</div>
                </div>
                <div style="padding:14px;border-top:1px solid #f1f3f5;">
                    <input id="chatInputRight" type="text" class="form-control mb-2" placeholder="Type your message..." aria-label="Support message">
                    <button id="startChat" class="btn" style="background:#25D366;color:#fff;width:100%;font-weight:600;padding:12px;border-radius:999px;">
                        <i class="bi bi-send me-2"></i>Send message
                    </button>
                </div>
            </div>

            <script>
                (function(){
                    function openWhatsApp(message){
                        const phone = '256757733205';
                        const url = 'https://wa.me/' + phone + '?text=' + encodeURIComponent(message);
                        window.open(url, '_blank', 'noopener');
                    }

                    const panelRight = document.getElementById('chatPanelRight');
                    const closeRight = document.getElementById('closeChatRight');
                    const startChat = document.getElementById('startChat');
                    const inputRight = document.getElementById('chatInputRight');
                    const messagesRight = document.getElementById('chatMessagesRight');
                    const toggle = document.getElementById('chatToggleRight');
                    const supportTabEl = document.getElementById('supportTab');

                    if(toggle){
                        toggle.addEventListener('click', ()=> panelRight.classList.toggle('open'));
                    }

                    if(supportTabEl){
                        supportTabEl.addEventListener('click', ()=> panelRight.classList.toggle('open'));
                    }

                    if(closeRight){ closeRight.addEventListener('click', ()=> panelRight.classList.remove('open')); }

                    function appendUserMessage(text){
                        if(!messagesRight) return;
                        const el = document.createElement('div'); el.className='chat-bubble user'; el.textContent = text; messagesRight.appendChild(el); messagesRight.scrollTop = messagesRight.scrollHeight;
                    }

                    if(startChat){
                        startChat.addEventListener('click', ()=>{
                            const defaultMsg = 'Welcome to Bugema University eLearning Support Desk';
                            const txt = (inputRight && inputRight.value.trim()) ? inputRight.value.trim() : defaultMsg;
                            appendUserMessage(txt);
                            openWhatsApp(txt);
                            if(inputRight) inputRight.value = '';
                            panelRight.classList.remove('open');
                        });
                    }

                    if(inputRight){
                        inputRight.addEventListener('keydown', (e)=>{ if(e.key === 'Enter'){ startChat.click(); } });
                    }
                })();
            </script>

    </body>

    </html>