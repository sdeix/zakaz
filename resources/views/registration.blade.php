@extends('layout')
<title>Регистрация</title>

@section('menu-buttons')
    <a href='/authorization' type="button" class="btn btn-outline-danger">Я уже зарегистрирован!</a>
@endsection
@section('main-content')

    <center>
        <h1 class="h3 mb-4 fw-normal" style="margin-top: 5rem">РЕГИСТРАЦИЯ</h1>
        <form action="{{route('registration')}}" method="post">
        @csrf
        <div style="width: 25rem">
            <div class="form-floating form__item--invalid" style="margin-top: 3rem">
                <p class="text-secondary" style='position: absolute; font-size: 15px; margin-left: 2rem; margin-top: 0.3rem'>Введите Фамилию</p>
                <input type="login" class="form-control" id="floatingInput" required autofocus placeholder='Surname' name="surname">
                <label for="floatingInput"></label>
            </div>
            <div class="form-floating form__item--invalid" style="margin-top: 1rem">
                <p class="text-secondary" style='position: absolute; font-size: 15px; margin-left: 2rem; margin-top: 0.3rem'>Введите Имя</p>
                <input type="login" class="form-control" id="floatingInput" required autofocus placeholder='Name' name="name">
                <label for="floatingInput"></label>
            </div>
            <div class="form-floating form__item--invalid" style="margin-top: 1rem">
                <p class="text-secondary" style='position: absolute; font-size: 15px; margin-left: 2rem; margin-top: 0.3rem'>Введите email</p>
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput"></label>
            </div>
            <div class="form-floating form__item--invalid" style="margin-top: 1rem">
                <p class="text-secondary" style='position: absolute; font-size: 15px; margin-left: 2rem; margin-top: 0.3rem'>Введите Пароль</p>
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword"></label>
            </div>


        </div>
            @error('email')
            <p>Эта почта уже занята</p>
            @enderror
            @error('password')
            <p>Длина пароля должна быть от 6 до 16 символов</p>
            @enderror
            @error('name')
            <p>Длина имени должна быть меньше 30 символов</p>
            @enderror
            @error('surname')
            <p>Длина фамилии должна быть меньше 30 символов</p>
            @enderror
        <button class="btn btn-lg btn-primary faf btn-danger" type="submit" style="width: 20rem; height: 3rem; margin-top: 2rem">Зарегистрироваться</button>
        </form>
    </center>
    <center style="margin-top: 1rem">
        <a href="/registration" style="color: red">Вы еще не регистрировались?</a>
    </center>
    <center>
        <p class="mt-5 mb-3 text-muted">©2024</p>
    </center>

@endsection
