@extends('layout')
<title>Контакты</title>


@section('main-content')
<body>
    <div>
        <h1 style="margin-left: 3rem">Средства связи:</h1>
            <div style="margin-left: 7rem; font-size: 25px">
                <p>Связаться с нами очень просто. Есть несколько способов: телефон, почта и социальные сети "Вконтакте", "Телеграмм" и "Одноклассники".</p>
                <p style="margin-top: -1rem; font-size: 25px">Время работы средств связи: круглосуточное, без выходных. Ответ производится в порядке очереди и занятости на линии.</p>
                <p class="fw-bold" style="font-size: 25px">Просьба писать на почту или звонить по телефону, которые подразумевает собой причины вашего обращения.</p>

                <div class="nav col-15 col-md-auto mb-2" style="margin-top: 2rem">
                    <h3 class="fw-light mb-0 fs-0" style="font-size: 25px">Номер телефона службы поддержки:</h3>
                    <a class="fw-semi-bold mb-0 fs-0" style="font-size: 25px; margin-left: 1rem" href="tel:79859133057">+7 (999) 889-89-89</a>
                </div>
                <div class="nav col-15 col-md-auto mb-2" style="margin-top: 0.5rem">
                    <h3 class="fw-light mb-0 fs-0" style="font-size: 25px">Электронная почта службы поддержки:</h3>
                    <a class="fw-semi-bold mb-0 fs-0" style="font-size: 25px; margin-left: 1rem" href="mailto:casta-25@mail.ru">dostavochkinhelp@mail.ru</a>
                </div>
                <div class="nav col-15 col-md-auto mb-2" style="margin-top: 2rem">
                    <h3 class="fw-light mb-0 fs-0" style="font-size: 25px">Номер телефона для поставщиков и сотрудничества:</h3>
                    <a class="fw-semi-bold mb-0 fs-0" style="font-size: 25px; margin-left: 1rem" href="tel:79163183566">+7 (945) 129-29-55</a>
                </div>
                <div class="nav col-15 col-md-auto mb-2" style="margin-top: 0.5rem">
                    <h3 class="fw-light mb-0 fs-0" style="font-size: 25px">Электронная почта для поставщиков и сотрудничества:</h3>
                    <a class="fw-semi-bold mb-0 fs-0" style="font-size: 25px; margin-left: 1rem" href="mailto:casta-25@mail.ru">dostavochkin@mail.ru</a>
                </div>
                <div class="nav col-15 col-md-auto mb-2" style="margin-top: 2rem">
                    <h3 class="fw-light mb-0 fs-0" style="font-size: 25px">Электронная почта для заявок на работу:</h3>
                    <a class="fw-semi-bold mb-0 fs-0" style="font-size: 25px; margin-left: 1rem" href="mailto:casta-25@mail.ru">dostavochkinwork@mail.ru</a>
                </div>
            </div>
    </div>

    <h2 style="margin-left: 3rem; margin-top: 2rem">Наше местоположение на карте:</h2>
    <p style="font-size: 20px; margin-left: 9rem">Наш офис располгается в городе Москва по адресу: 2-й Южнопортовый проезд, 31с3. Ближайшей к офису станцией метро является Кожуховская.</p>
    <center style="margin-top: 1rem">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A91f4e48b582ec194d2c66f5e6577ddbdf8e1e71f76c7d171104e2704ad2442d4&amp;width=85%25&amp;height=550&amp;lang=ru_RU&amp;scroll=true"></script>
    </center>
</body>
@endsection
