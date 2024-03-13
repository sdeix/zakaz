@extends('layout')
<title>О нас</title>

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
    <div class="container px-4 py-5" style="margin-top: -3rem">
        <h2 class="pb-2 border-bottom" style="margin-bottom: 0.4rem">О НАС</h2>
        <div>
            <img class="block-d"  style="padding-top: 1rem" width="1260" height="620" src="/images/Kurierdostav.png" alt="">
            <p class="fw-semibold" style="padding-top: 1rem; font-size: 26px">ООО "ДОСТАВОЧКИН" - это онлайн-сервис по доставке продукции, который является одним из лучших и передовых в стране. Наш бренд основан командой профессионалов с многолетним опытом работы в сфере логистики и поставок. Наша миссия состоит в том, чтобы сделать сервис и процесс доставки товаров максимально быстрым, удобным и надежным для наших клиентов.
                Доставочкин представляет собой качество и оперативность через элементы в интерфейсе и работе приложения, авторскую, свежую и уникальную продукцию. Услуги онлайн-сервиса сделают Ваши ощущения действительно незабываемыми.</p>
            <h4 class="fw-bold mb-0 fs-1" style="margin-top: 4rem; margin-left: 0rem">Год основания: 2023</h4>
            <h3 class="fw-semi-bold mb-0 fs-0" style="margin-left: 2rem; margin-top: 1.5rem">Юридический адрес: 101000, Российская Федерация, г.Москва, улица Академиков, д.322 </h3>
            <h3 class="fw-semi-bold mb-0 fs-0" style="margin-left: 2rem; margin-top: 0.5rem">Фактический адрес: 1115573, Российская Федерация, г.Москва, Кедровый бульвар, д.31 </h3>
                <div class="nav col-15 col-md-auto mb-2" style="margin-top: 3rem">
                    <h3 class="fw-light mb-0 fs-0" style="margin-left: 2rem; font-size: 32px">Номер службы поддержки:</h3>
                    <a class="fw-semi-bold mb-0 fs-0" style="font-size: 30px; margin-left: 1rem" href="tel:79859133057">+7 (999) 889-89-89</a>
                </div>
                <div class="nav col-15 col-md-auto mb-2">
                    <h3 class="fw-light mb-0 fs-0" style="margin-left: 2rem; font-size: 32px">Номер для поставщиков и сотрудничества:</h3>
                    <a class="fw-semi-bold mb-0 fs-0" style="font-size: 30px; margin-left: 1rem" href="tel:79163183566">+7 (945) 129-29-55</a>
                </div>
            <div class="nav col-15 col-md-auto mb-2" style="margin-top: 3rem">
                <h3 class="fw-light mb-0 fs-0" style="margin-left: 2rem; font-size: 32px">Электронная почта для сотрудничества:</h3>
                <a class="fw-semi-bold mb-0 fs-0" style="font-size: 30px; margin-left: 1rem" href="mailto:casta-25@mail.ru">dostavochkin@mail.ru</a>
            </div>
        </div>

    </div>

    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom" style="margin-bottom: 0.2rem">ГОРОДА, ГДЕ МЫ РАБОТАЕМ</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://i.pinimg.com/564x/f8/94/b1/f894b1dd6f459ce3ad83bafcd7dffb73.jpg')">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1" style="margin-bottom: 8rem; padding-top: 3rem">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style="margin-left: 4rem; margin-bottom: 3rem">МОСКВА</h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://i.pinimg.com/564x/8f/31/e3/8f31e3eca0373318cf293727aa526acb.jpg')">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-3 mb-4 display-6 lh-1 fw-bold" style="margin-left: 4rem">САНКТ-ПЕТЕРБУРГ</h3>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://i.pinimg.com/564x/f3/8a/be/f38abec03ff279867bd8036bd6c8a8aa.jpg')">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1" style="margin-bottom: 8rem; padding-top: 3rem">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style="margin-left: 5rem; margin-bottom: 3rem">КАЗАНЬ</h3>
                    </div>
                </div>
            </div>
            <div class="col" style="margin-left: 27rem">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://i.pinimg.com/564x/4f/1d/cf/4f1dcf9a43f469bedd3e6db13a9b45f7.jpg')">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1" style="margin-bottom: 8rem; padding-top: 3rem">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" style="margin-left: 5rem; margin-bottom: 3rem">САМАРА</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
