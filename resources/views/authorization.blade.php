@extends('layout')
<title>Авторизация</title>

@section('menu-buttons')
    <a href='/registration' type="button" class="btn btn-outline-danger" style="margin-right: 0.6rem">Я хочу зарегистрироваться!</a>
@endsection
@section('main-content')
    <center>

        <h1 class="h3 mb-4 fw-normal" style="margin-top: 5rem">АВТОРИЗАЦИЯ</h1>
        <form action="{{route('authorization')}}" method="post"> 
        @csrf
        <div style="width: 25rem">
            <div class="form-floating form__item--invalid" style="margin-top: 3rem">
                <p class="text-secondary" style='position: absolute; font-size: 15px; margin-left: 2rem; margin-top: 0.3rem'>Введите Email</p>
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput"></label>
            </div>

            <div class="form-floating form__item--invalid" style="margin-top: 1rem; color: red">
                <p class="text-secondary" style='position: absolute; font-size: 15px; margin-left: 2rem; margin-top: 0.3rem'>Введите пароль</p>
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword"></label>
            </div>
        </div>
        @error('email')
           <p>{{$message}}</p> 
            @enderror
        <button class="btn btn-lg btn-primary faf btn-danger" type="submit" style="width: 20rem; height: 3rem; margin-top: 2rem">Войти</button>
        </form>
    </center>
    <center style="margin-top: 1rem">
        <a href="/registration" style="color: red">Вы еще не регистрировались?</a>
    </center>
    <center>
        <p class="mt-5 mb-3 text-muted">©2024</p>
    </center>
@endsection
