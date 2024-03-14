@extends('layout')
<title>Профиль</title>

@section('menu-buttons')
@if(Auth::check())
<a href="/account" class="{{ request()->is('account') ? 'active' : null }} nav-link px-3"  style="color: red">Профиль</a>
<a href='/logout' type="button" class="btn btn-outline-danger">Выйти</a>
@else
<a href='/registration' type="button" class="btn btn-outline-danger" style="margin-right: 0.6rem">Зарегистрироваться</a>
<a href='/authorization' type="button" class="btn btn-outline-danger">Войти</a>
@endif
@endsection
@section('main-content')
<body>
<h1 class="text-danger">Профиль</h1>
<h2 class="text-danger">Ваши данные:</h2>
<ul>
    <li class="text-danger">Имя: {{Auth::user()->name}}</li>
    <li class="text-danger">Фамилия: {{Auth::user()->surname}}</li>
    <li class="text-danger">Почта: {{Auth::user()->email}}</li>
</ul>

</body>
@endsection
