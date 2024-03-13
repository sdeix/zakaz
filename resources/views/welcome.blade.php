@extends('layout')
<title>Главная страница</title>

@section('menu-buttons')

    <a href='/registration' type="button" class="btn btn-outline-danger" style="margin-right: 0.6rem">Зарегистрироваться</a>
    <a href='/authorization' type="button" class="btn btn-outline-danger">Войти</a>
    <a href='/logout' type="button" class="btn btn-outline-danger">Выйти</a>
@endsection
@section('main-content')
    <div class="row mb-2 justify-content-center mb-md-0" style="padding-top: 5px; width: 2000px; height: 300px; font-size: 18px; margin-right: 5rem" >
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Предложения</strong>
                    <h3 class="mb-0">КОНТЕКСТ ВАЖЕН ВСЕГДА!</h3>
                    <p class="card-text mb-auto" style="margin-top: 0.6rem">Не забывайте про раздел "Исключительно для вас", а то он скучает. Именно в данном разделе большинство позиций, которые вы так сильно любите.</p>
                    <a href='/aboutus' type="button" class="btn d-inline-flex align-items-center bg-danger justify-content-center mb-md-0" style="width: 400px; margin-left: 12rem; color: white; font-size: 20px">ПОСМОТРЕТЬ</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" src="/images/lovekont.jpg">
                </div>
            </div>
        </div>
    </div>
    <div class="container px-4 py-5" id="icon-grid" style="margin-top: 0.5rem">
        <h2 class="pb-2 border-bottom"><ya-tr-span data-index="23-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Icon grid" data-translation="Сетка значков" data-ch="0" data-type="trSpan">В ДВУХ СЛОВАХ О НАШЕМ СЕРВИСЕ</ya-tr-span></h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
            <div class="col d-flex align-items-start">
                <img style="width: 60px; height: 40px; padding-top: 0.6rem" src="/images/prosto.png">
                <div style="padding-left: 1rem">
                    <h3 class="fw-bold mb-0 fs-4"><ya-tr-span data-index="24-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Featured title" data-translation="Рекомендуемое название" data-ch="0" data-type="trSpan">Просто, приятно, понятно</ya-tr-span></h3>
                    <p style="padding-top: 0.4rem"><ya-tr-span data-index="25-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Paragraph of text beneath the heading to explain the heading." data-translation="Абзац текста под заголовком, поясняющий заголовок." data-ch="0" data-type="trSpan">Удобный и понятный интерфейс, разработанный с любовью и только для вас!</ya-tr-span></p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <img style="width: 60px; height: 50px; padding-top: 0.2rem" src="/images/bistro.png">
                <div style="padding-left: 1rem">
                    <h3 class="fw-bold mb-0 fs-4"><ya-tr-span data-index="24-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Featured title" data-translation="Рекомендуемое название" data-ch="0" data-type="trSpan">Быстро и легко</ya-tr-span></h3>
                    <p style="padding-top: 0.4rem"><ya-tr-span data-index="25-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Paragraph of text beneath the heading to explain the heading." data-translation="Абзац текста под заголовком, поясняющий заголовок." data-ch="0" data-type="trSpan">Оформляйте заказ в один клик и он сразу же собирается и передается нашим курьерам</ya-tr-span></p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <img style="width: 70px; height: 45px" src="/images/product.png">
                <div>
                    <h3 class="fw-bold mb-0 fs-4"><ya-tr-span data-index="24-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Featured title" data-translation="Рекомендуемое название" data-ch="0" data-type="trSpan">Свежесть и качество</ya-tr-span></h3>
                    <p style="padding-top: 0.4rem"><ya-tr-span data-index="25-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Paragraph of text beneath the heading to explain the heading." data-translation="Абзац текста под заголовком, поясняющий заголовок." data-ch="0" data-type="trSpan">Множество свежих фруктов и овощей, огромное количество продуктов и блюд, чтобы вы всегда были сыты</ya-tr-span></p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <img style="width: 70px; height: 52px" src="/images/dostavka.png">
                <div style="padding-left: 0.5rem">
                    <h3 class="fw-bold mb-0 fs-4"><ya-tr-span data-index="24-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Featured title" data-translation="Рекомендуемое название" data-ch="0" data-type="trSpan">Даже моргнуть не успеете</ya-tr-span></h3>
                    <p style="padding-top: 0.4rem"><ya-tr-span data-index="25-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Paragraph of text beneath the heading to explain the heading." data-translation="Абзац текста под заголовком, поясняющий заголовок." data-ch="0" data-type="trSpan">Сразу же после оформления заказа, курьер уже во всю мчится к вам.</ya-tr-span></p>
                </div>
            </div>
            <div class="col d-flex align-items-start" style="margin-left: 19.5rem">
                <img style="width: 65px; height: 56px" src="/images/eko.png">
                <div style="margin-left: 1.5rem">
                    <h3 class="fw-bold mb-0 fs-4"><ya-tr-span data-index="24-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Featured title" data-translation="Рекомендуемое название" data-ch="0" data-type="trSpan">ЗОВ ПРИРОДЫ!</ya-tr-span></h3>
                    <p style="padding-top: 0.4rem"><ya-tr-span data-index="25-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Paragraph of text beneath the heading to explain the heading." data-translation="Абзац текста под заголовком, поясняющий заголовок." data-ch="0" data-type="trSpan">Мы можем заботиться о природе вместе. Наш сервис предлагает вам возвращать пакеты, что позволит использовать меньше пластика в производстве. ЛИШЬ ВМЕСТЕ МЫ СОХРАНИМ ПРИРОДУ!</ya-tr-span></p>
                </div>
            </div>
            <div class="col d-flex align-items-start" style="margin-left: 1.5rem">
                <img style="width: 65px; height: 56px; padding-top: 0.2rem; padding-right:1rem" src="/images/blago.png">
                <div>
                    <h3 class="fw-bold mb-0 fs-4"><ya-tr-span data-index="24-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Featured title" data-translation="Рекомендуемое название" data-ch="0" data-type="trSpan">ТВОРИМ ДОБРО ВМЕСТЕ!</ya-tr-span></h3>
                    <p style="padding-top: 0.4rem"><ya-tr-span data-index="25-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Paragraph of text beneath the heading to explain the heading." data-translation="Абзац текста под заголовком, поясняющий заголовок." data-ch="0" data-type="trSpan">5% с каждой вашей покупки отправляются в различные фонды помощи. Таким образом мы вместе спасаем жизни многим нуждающимся людям.</ya-tr-span></p>
                </div>
            </div>
        </div>
        <h2 class="pb-2 border-bottom"></h2>
    </div>




    <div class="row mb-2" style="padding-top: 5px " >
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-danger">Помощь нуждающимся</strong>
                    <h3 class="mb-0">ПОМОЖЕМ ВСЕМ, КТО НУЖДАЕТСЯ!</h3>
                    <div class="mb-1 text-body-secondary">20 АПРЕЛЯ 2023</div>
                    <p class="card-text mb-auto">Поможем вместе нуждающимся! Заказывая продукцию в Доставочкин, именно вы помогаете бездомным, сиротам и пенсионерам, ведь каждые 5% от ваших покупок идут на благотворительность!</p>
                    <a href="#" class="stretched-link" style="padding-bottom: 10px">Продолжить читать</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" src="https://plus.unsplash.com/premium_photo-1661775322183-bf9d38cff431?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=707&q=80">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Наши проекты</strong>
                    <h3 class="mb-0">СКИДКИ ДО 30% ПОСТОЯННЫМ ПОКУПАТЕЛЯМ</h3>
                    <p class="card-text mb-auto">Заказывайте любимую продукцию чаще и мы подарим вам промокод на скидку до 30%</p>
                    <a href="/production" class="stretched-link" style="font-size: 25px; margin-left: 18rem; color: red">ЗАКАЗАТЬ</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" src="https://images.unsplash.com/photo-1665686306574-1ace09918530?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80">
                </div>
            </div>
        </div>
    </div>
@endsection
