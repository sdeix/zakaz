@extends('layout')
<title>Регистрация</title>

@section('menu-buttons')
    <a href='/authorization' type="button" class="btn btn-outline-danger">Я уже зарегистрирован!</a>
@endsection
@section('main-content')

    <center>
        <h1 class="h3 mb-4 fw-normal" style="margin-top: 5rem">РЕГИСТРАЦИЯ</h1>
        <form action="{{route('add_product')}}" method="post" enctype= multipart/form-data>
        @csrf
        <div style="width: 25rem">
            <div class="form-floating form__item--invalid" style="margin-top: 3rem">
                <p class="text-secondary" style='position: absolute; font-size: 15px; margin-left: 2rem; margin-top: 0.3rem'>Название товара</p>
                <input type="name" class="form-control" id="floatingInput" required autofocus placeholder='Название' name="name">
                <label for="floatingInput"></label>
            </div>
            <div class="form-floating form__item--invalid" style="margin-top: 1rem">
                <p class="text-secondary" style='position: absolute; font-size: 15px; margin-left: 2rem; margin-top: 0.3rem'>Введите цену</p>
                <input type="login" class="form-control" id="floatingInput" required autofocus placeholder='Цена' name="price">
                <label for="floatingInput"></label>
            </div>
            <div class="form-floating form__item--invalid" style="margin-top: 1rem">
                <p class="text-secondary" style='position: absolute; font-size: 15px; margin-left: 2rem; margin-top: 0.3rem'>Колличество</p>
                <input class="form-control" id="floatingInput" placeholder="Колличество" name="count">
                <label for="floatingInput"></label>
            </div>
            <div class="form-floating form__item--invalid" style="margin-top: 1rem">
                <p class="text-secondary" style='position: absolute; font-size: 15px; margin-left: 2rem; margin-top: 0.3rem'>Загрузите изображенме</p>
                <input type="file" src="" alt="" class="form-control" id="floatingInput" name="image">
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
        <button class="btn btn-lg btn-primary faf btn-danger" type="submit" style="width: 20rem; height: 3rem; margin-top: 2rem">Создать товар</button>
        </form>
    </center>

    <center>
        <p class="mt-5 mb-3 text-muted">©2024</p>
    </center>

@endsection
