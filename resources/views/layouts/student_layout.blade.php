<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/student.layout.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="sidemenu-wrap">
        <div class="sidemenu">
            <div class="user-info">
                <img class="user-profile-img" src="{{ Auth::user()->profile_img }}" alt="">
                <span class="user-name">{{ Auth::user()->name . ' ' . Auth::user()->paternal_surname }}</span>
                <span class="user-level">Nivel: {{ Auth::user()->user->current_level }}</span>
                <span class="user-money"> Dinero: {{ Auth::user()->user->money }} <i class="fas fa-coins"></i></span>
                <span class="user-xp"> Exp: {{ Auth::user()->user->current_xp }} / {{ Auth::user()->user->next_level }} </span>
            </div>
            <div class="menu-links">
                <ul class="links">
                    <li><p class="text text-lighter h4" style="padding-left: 15px">Menú</p></li>
                    <li class="link-item {{ Request::path() === 'home' ? 'selected' : '' }}"><a href="/home"><i class="fas fa-home"></i></i> Inicio</a></li>
                    <li class="link-item {{ Request::path() === 'my_classes' ? 'selected' : '' }}"><a href="/my_classes"><i class="fas fa-chalkboard"></i> Mis clases</a></li>
                    <li class="link-item {{ Request::path() === 'my_schedule' ? 'selected' : '' }}"><a href="/my_schedule"><i class="far fa-calendar-alt"></i> Mi horario</a></li>
                    <li class="link-item {{ Request::path() === 'avatar' ? 'selected' : '' }}"><a href="/avatar"><i class="fas fa-user"></i> Mi avatar</a></li>
                    <hr>
                    <li class="link-item"><a href="/logout"><i class="fas fa-sign-out-alt"></i>Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>
</body>
</html>