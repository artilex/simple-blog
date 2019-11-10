<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
    <div id="example">
        <div class="wrap">
            <header class="header">
                <div class="logo-block header-item">
                    <a href="{{ route('blog.articles') }}">
                        <img class="logo-image" src="/img/logo.jpg">
                    </a>
                </div>
                <div class="menu-block header-item">
                    <div class="menu-item">
                        <a href="{{ route('articles') }}">Статьи</a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('tags') }}">Теги</a>
                    </div>
                    <div class="menu-item">
                        <a href="#">Пользователи</a>
                    </div>
                </div>
                <div class="login-block header-item">
                    {{ Auth::user()->name }}
                </div>
            </header>
            <main class="main-content">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/textarea.js') }}"></script>
</body>
</html>
