<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="wrap">
            <header class="header">
                <div class="logo-block header-item">
                    <a href="{{ route('blog.articles') }}">
                        <img class="logo-image" src="/img/logo.jpg">
                    </a>
                </div>
                <div class="search-block header-item">
                    <input type="text" name="search-title" placeholder="Поиск...">
                </div>
                <div class="menu-block header-item">
                    <div class="menu-item">
                        <a href="{{ route('blog.articles') }}">Статьи</a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('blog.tags') }}">Теги</a>
                    </div>
                    <div class="menu-item">
                        <a href="{{ route('blog.about') }}">Обо мне</a>
                    </div>
                </div>
                <div class="login-block header-item">
                    Username
                </div>
            </header>
            <main class="main-content">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
