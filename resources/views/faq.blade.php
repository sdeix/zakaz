@extends('layout')
<title>FAQ</title>

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
    <img class="block-d "  style="padding-top: 1rem; margin-left: 13rem" width="1400" height="150" src="/images/srvremya.png" alt="">

        <div class="" style="margin-top: 3rem">
            <p class="fw-bold mb-0 fs-0" style="margin-left: 5rem; font-size: 28px">1) В каких городах работаем?</p>
            <p class="mb-0 fs-0" style="font-size: 24px; margin-left: 5rem"> Наш сервис доступен в Москве, Санкт-Петербурге, Казани, Самаре.</p>
        </div>

        <div class="" style="margin-top: 2rem">
            <p class="fw-bold mb-0 fs-0" style="margin-left: 5rem; font-size: 28px">2) Работаем ли в областях и регионах?</p>
            <p class="mb-0 fs-0" style="font-size: 24px; margin-left: 5rem"> Наш сервис и доставка работают исключительно в пределах города. Области, субъекты и регионы принадлежащие городам не входят в оферту о доставке.</p>
        </div>

        <div class="" style="margin-top: 2rem">
            <p class="fw-bold mb-0 fs-0" style="margin-left: 5rem; font-size: 28px">3) Как осуществляется доставка?</p>
            <p class="mb-0 fs-0" style="font-size: 24px; margin-left: 5rem"> Доставка осуществляется одним курьером. Продукция упакована в пластиковом пакете и на протяжении всего времени доставки хранится
                в сумке или в её холодильном отсеке, если это необходимо. Весь процесс доставки проводится согласно всем нормам Госстрандартов и Законов Российской Федерации.</p>
        </div>

        <div style="margin-top: 2rem; margin-right: 1.2rem">
            <p class="fw-bold mb-0 fs-0" style="margin-left: 5rem; font-size: 28px">4) Как сделать заказ?</p>
            <p class="mb-0 fs-0" style="font-size: 24px; margin-left: 5rem">Для начала перейдите во вкладку "Продукция" и выберите необходимую продукцию. Нажмите кнопку добавить и количество, которое вам необходимо.
                Когда вся продукция будет выбрана, перейдите в раздел "Корзина", где можно посмотреть весь товарный лист, после чего нажать на кнопку "Оформить заказ".
                На странице оформления заказа необходимо проверить или заполнить информацию о доставке, после чего нажать на кнопку "Подтвердить". Далее работа за нами.</p>
        </div>

        <div style="margin-top: 2rem; margin-right: 1.2rem">
            <p class="fw-bold mb-0 fs-0" style="margin-left: 5rem; font-size: 28px">5) Можно ли сделать заказ, если я не зарегистрирован на сервисе?</p>
            <p class="mb-0 fs-0" style="font-size: 24px; margin-left: 5rem">Нет, такая функция недоступна и сейчас расскажем почему. Незарегстрированный или авторизированный профиль не может оформить и сделать заказ.
                Это сделано исключительно в целях безопасности как вашей, так и нашей.</p>
        </div>

        <div style="margin-top: 2rem; margin-right: 1.2rem">
            <p class="fw-bold mb-0 fs-0" style="margin-left: 5rem; font-size: 28px">6) Сколько стоит доставка?</p>
            <p class="mb-0 fs-0" style="font-size: 24px; margin-left: 5rem">Вне зависимости от погоды, времени суток или года, стоимость нашей доставки совершенно бесплатная. Электровелосипеды и самокаты не требуют расходов на топливо.</p>
        </div>

        <div style="margin-top: 2rem; margin-right: 1.2rem">
            <p class="fw-bold mb-0 fs-0" style="margin-left: 5rem; font-size: 28px">7) Возможно ли вернуть товар и как?</p>
            <p class="mb-0 fs-0" style="font-size: 24px; margin-left: 5rem">Купленный товар невозможно вернуть после оформления заказа. Если же товар окажется просрочен, испорчен или иметь дефекты,
                то обратитесь на электронную почту с прикрепленными фото товара и мы сделаем скидку равную сумме товара на следующий заказ.</p>
            <a class="fw-bold mb-0 fs-0" style="font-size: 24px; margin-left: 5rem" href="mailto:casta-25@mail.ru">Пишите сюда: dostavochkinhelp@mail.ru</a>
        </div>

        <div style="margin-top: 2rem; margin-right: 1.2rem">
            <p class="fw-bold mb-0 fs-0" style="margin-left: 5rem; font-size: 28px">8) Можно ли к вам в команду?</p>
            <p class="mb-0 fs-0" style="font-size: 24px; margin-left: 5rem">Конечно, наши двери открыты для всех. Наш сервис постоянно расширяется и ищет сотрудников. Мы ищем людей из различных сфер, нам нужны
            IT-специалисты, Маркетнг-специалисты, Курьеры, Сортировщики, Развозчики продукции по складам и Логисты. Чтобы получить больше информации смотрите соответствующий раздел,
            а если вы готовы присоединиться к нам, то пишите нам на почту</p>
            <a class="fw-bold mb-0 fs-0" style="font-size: 24px; margin-left: 5rem" href="#">Больше нформации по работе у нас</a>
            <a class="fw-bold mb-0 fs-0" style="font-size: 24px; margin-left: 5rem" href="mailto:casta-25@mail.ru">Отправить заявку на работу: dostavochkinwork@mail.ru</a>
        </div>

        <div style="margin-top: 2rem; margin-right: 1.2rem">
            <p class="fw-bold mb-0 fs-0" style="margin-left: 5rem; font-size: 28px">6) Обязательства.</p>
            <p class="mb-0 fs-0" style="font-size: 24px; margin-left: 5rem">Оформляя заказ, покупатель принимает все условия и соглашения оферты заказа перед продавцом.
                Если покупатель не принимает заказ от курьера и отказывается от его приемки, то сумма заказа не возвращается без предоставления причин.</p>
        </div>
    <img class="block-d "  style="padding-top: 2rem; margin-left: 13rem" width="1460" height="540" src="/images/Aboutdelivery.png" alt="">

    <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom"></h2>
        <div>
            <p class="fw-standart" style="padding-top: 2rem; font-size: 23px; margin-left: 5rem">Наш сервис является новым, однако основан командой профессионалов с многолетним опытом работы в данной сфере. Мы разбираемся в логистике,
                поэтому точки сбора вашего заказа находятся в лучших местах, чтобы обеспечить вам моментальную доставку свежих и качественных продуктов.</p>
            <p class="fw-standart" style="padding-top: 0.5rem; font-size: 25px; margin-left: 5rem">Время доставки занимает от 15 до 30 минут, без учета времени сборки заказа, которая в свою очередь занимает 5-15 минут, после вашего оформления.
                Вы будете получать соответствующие сообщения, со статусами заказа. Сразу после сборки, курьер заберет заказ и отвезет его на указаный, в вашем профиле или при оформлении заказа, адрес.</p>

        </div>
    </div>
@endsection

