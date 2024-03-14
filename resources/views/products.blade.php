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
    <form action="{{ route('basket.add', $product->id_товара) }}"
          method="post" class="form-inline">
        @csrf
        <label for="input-quantity">Количество</label>
        <input type="text" name="quantity" id="input-quantity" value="1"
               class="form-control mx-2 w-25">
        <button type="submit" class="card_btn btn btn-success">Добавить в корзину</button>
    </form>
</div>
@endforeach

</ul>



@endsection
