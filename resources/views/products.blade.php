@extends('layout')
<title>Главная страница</title>

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
<ul class="ul_card">
@foreach($products as $product)
<div class="product-card col-xxl-3 col-lg-5 col-11 rounded border">
    <div class="">
        <img src="{{$product->imgFile}}" style="max-width: 100%;" alt="Изображение временно отсутствует">
    </div>
    <p class="card_name">{{$product->Название}}</p>
    <p class = "card_count">Осталось: {{$product->Количество}}</p>
    <button class="card_btn">Добавить в корзину</button>
</div>
@endforeach

</ul>



@endsection
