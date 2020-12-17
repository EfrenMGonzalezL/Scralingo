<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/teacher.layout.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="menu">
        <h1 class="h3 text page-title">
            @yield('back-arrow')
            @yield('title')
        </h1>
        @yield('nav-menu')
        <div class="user-menu">
            <img src="{{ Auth::user()->profile_img }}" alt="user-profile-img" class="profile-img">&nbsp;
            <span class="user-name">
                <span class="text">
                    {{ Auth::user()->name }} {{ Auth::user()->paternal_surname }}
                    <i class="fas fa-caret-down"></i>
                </span>
                <ul class="dropdown">
                    <li><a href="/profile"><i class="fas fa-user"></i> Mi perfil</a></li>
                    <hr>
                    <li><a href="/logout"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a></li>
                </ul>
            </span>
        </div>
    </div>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/teacher.layout.js') }}"></script>
</body>
</html>