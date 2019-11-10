@extends('layouts.login')

@section('content')

<form class="login-block" method="POST" action="{{ route('login.auth') }}">
    <div class="login-title">Войдите в блог</div>
    @if ($message = Session::get('error'))
    <div class="error">
        {{ $message }}
    </div>
    @endif
    {{ csrf_field() }}
    <input type="text" name="login" placeholder="Логин">
    <input type="password" name="password" placeholder="Пароль">
    <input type="submit" value="Войти">
</form>

@endsection