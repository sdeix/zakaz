@extends('layout')
<title>Главная страница</title>


@section('main-content')
@if(Auth::check())
        @if(Auth::user()->role=="admin")
<h1><a style="margin-left:20px" class="btn btn-outline-danger col-10" href="/add_product">Добавить товар</a></h1>
        @endif
@endif
<ul class="ul_card">
@foreach($products as $product)
<div class="product-card col-xxl-3 col-lg-5 col-11 rounded border border-danger">
    <div class="">

        @if(strpos( $product->imgFile,'://'))
        <img src="{{$product->imgFile}}" style="max-width: 100%;" alt="Изображение временно отсутствует">
        @else
        @isset ($product->imgFile)
        <img src="{{asset('/storage/' . $product->imgFile) }}" style="max-width: 100%;" alt="Изображение временно отсутствует">
        @endisset
        @endif
       
    </div>
    <p class="card_name" >{{$product->Название}}</p>
    <p style="text-align: center; font-size:30px"> {{str_replace(['.00',',00'], '', $product->Цена)}}р</p>
        <p class = "card_count">Осталось: {{$product->Количество}}</p>


    <form class="d-flex", action="{{ route('basket.add', $product->id_товара) }}"
          method="post" class="form-inline">
        @csrf
        <label for="input-quantity">Количество</label>
        <input type="text" name="quantity" id="input-quantity" value="1"
               class="form-control mx-2 w-25">
        <button type="submit" class="card_btn btn btn-outline-danger">Добавить в корзину</button>
    </form>
    @if(Auth::check())
        @if(Auth::user()->role=="admin")
        <form class="d-flex", action="{{ route('delete_product', $product->id_товара) }}"
          method="post" class="form-inline">
        @csrf
        <button type="submit" class="card_btn btn btn-outline-danger">Удалить товар</button>
    </form>
        @endif
@endif

</div>
@endforeach

</ul>



@endsection
