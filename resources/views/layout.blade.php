<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{asset('css/maincss.css')}}" rel="stylesheet" type="text/css">

</head>
<header id="header" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a class="logo" href="/">
        <img class="block-d" style="padding-top: 0.1rem; padding-left: 5rem" width="200" height="100" src="/images/dostlogo.png" alt="">
    </a>
    <ul class="nav col-15 col-md-auto mb-2 justify-content-center mb-md-0" style="margin-top: 1.5rem; margin-left: 20rem">
        <li><a href="/" class="{{ request()->is('/') ? 'active' : null }} nav-link px-3" style="color: red">Главная</a></li>
        <li><a href="#" class="nav-link px-3" style="color: red">Продукция</a></li>
        <li><a href="/contacts" class="{{ request()->is('contacts') ? 'active' : null }} nav-link px-3"  style="color: red">Контакты</a></li>
        <li><a href="/aboutus" class="{{ request()->is('aboutus') ? 'active' : null }} nav-link px-3"  style="color: red">О Нас</a></li>
        <li><a href="/faq" target=_blank class="{{ request()->is('faq') ? 'active' : null }} nav-link px-3"  style="color: red">FAQ</a></li>
        <li><p class="phonenum nav-link px-5 link-secondary">Работаем с 09:00 до 00:00</p></li>
    </ul>
@yield('menu-header')
    <div class="col-md-3 text-end">
        <ul class="user-menu__list" style="margin-top: 0.5rem; margin-right: 7rem">
           @yield('menu-buttons')
        </ul>
    </div>
</header>
<body>
@yield('main-content')
</body>
<footer>
    <div class="container" style="margin-top: 5rem; margin-left: 15rem">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <span class="mb-md-0 text-muted" style="margin-bottom: 2rem">©2024, Dostavochkin. Все права защищены.</span>

            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                </a>
            </div>
            <div>
                <h2 class="text-secondary" style="margin-left: 66rem; font-size: 25px">КЛИЕНТАМ</h2>
                <ul class="nav col-md-4 justify-content-end" style="margin-left: 55rem; font-size: 18px">
                    <li class="nav-item"><a href="/aboutus" class="nav-link px-2 text-secondary"><ya-tr-span data-index="9-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="About" data-translation="О нас" data-ch="0" data-type="trSpan">О нас</ya-tr-span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-secondary"><ya-tr-span data-index="6-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Features" data-translation="Характеристики" data-ch="0" data-type="trSpan">Для закупщиков</ya-tr-span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-secondary"><ya-tr-span data-index="7-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Pricing" data-translation="Цены" data-ch="0" data-type="trSpan">Для поставщиков</ya-tr-span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-secondary"><ya-tr-span data-index="9-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="About" data-translation="О нас" data-ch="0" data-type="trSpan">Работа у нас</ya-tr-span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-secondary"><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="FAQs" data-translation="Вопросы и ответы" data-ch="0" data-type="trSpan">Контакты</ya-tr-span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-secondary"><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="FAQs" data-translation="Вопросы и ответы" data-ch="0" data-type="trSpan">Ответы на вопросы</ya-tr-span></a></li>
                </ul>
            </div>
            <p class="text fw-light" style="margin-left: 71rem; margin-top: 3rem">Наши cоцальные сети:</p>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex" style="margin-left: 55rem">
                <div class="SocialLinks-module__socialLinks--3HWQh Footer-module__socialLinks--1b63m">
                    <a class="SocialLinks-module__link--17tDZ" href="https://t.me/" target="_blank" rel="noreferrer" style="padding-right: 8px">
                        <svg class="SocialLinks-module__logo--1URSE" height="45" width="45" viewBox="0 0 35 35">
                            <circle cx="17" cy="17" r="17" fill="#44A2DF"></circle>
                            <path fill="#fff" d="m24.171 8.534-17.95 7.351c-.764.313-.672 1.422.133 1.605l4.567 1.04c.309.07.632.012.896-.162l8.576-5.636c.217-.142.45.155.26.332L14.5 18.788a1.161 1.161 0 0 0 .159 1.824l6.631 4.31a1.267 1.267 0 0 0 1.94-.855l2.384-14.383a1.056 1.056 0 0 0-1.442-1.15Z"></path>
                        </svg></a>
                    <a class="SocialLinks-module__link--17tDZ" href="https://vk.com/" target="_blank" rel="noreferrer" style="padding-right: 8px">
                        <svg class="SocialLinks-module__logo--1URSE" height="45" width="45" viewBox="0 0 35 35">
                            <circle cx="17" cy="17" r="17" fill="#07F"></circle>
                            <path fill="#fff" d="M18.028 25.265c-7.482 0-11.75-5.13-11.928-13.665h3.748c.123 6.265 2.886 8.919 5.075 9.466V11.6h3.53v5.403c2.16-.232 4.43-2.694 5.197-5.403h3.53c-.59 3.338-3.051 5.8-4.802 6.812 1.75.82 4.555 2.969 5.622 6.853h-3.885c-.834-2.599-2.913-4.61-5.663-4.883v4.883h-.424Z"></path></svg></a>
                    <a class="SocialLinks-module__link--17tDZ" href="https://ok.ru/" target="_blank" rel="noreferrer" style="padding-right: 8px">
                        <svg class="SocialLinks-module__logo--1URSE" height="45" width="45" viewBox="0 0 35 35" >
                            <g fill="none" fill-rule="evenodd">
                                <path d="M.375 17.927C.375 8.497 8.042.854 17.5.854s17.125 7.644 17.125 17.073C34.625 27.357 26.958 35 17.5 35S.375 27.356.375 17.927z" fill="#fe7c00"></path>
                                <path d="M17.485 9.277c1.323 0 2.399 1.038 2.399 2.314s-1.076 2.315-2.399 2.315c-1.321 0-2.398-1.039-2.398-2.315s1.077-2.314 2.398-2.314zm0 7.904c-3.194 0-5.792-2.507-5.792-5.59C11.693 8.508 14.291 6 17.485 6c3.195 0 5.792 2.508 5.792 5.591s-2.597 5.59-5.792 5.59zm2.359 4.564l3.238 3.126a1.597 1.597 0 010 2.316c-.663.64-1.737.64-2.399 0l-3.184-3.072-3.18 3.072c-.332.32-.767.48-1.201.48-.434 0-.868-.16-1.2-.48a1.599 1.599 0 010-2.316l3.238-3.126a11.088 11.088 0 01-3.363-1.345c-.793-.482-1.031-1.493-.532-2.259.498-.766 1.546-.997 2.34-.515a7.579 7.579 0 007.798 0c.794-.482 1.84-.251 2.34.515.5.766.26 1.777-.532 2.26a11.07 11.07 0 01-3.363 1.344z" fill="#ffffff"></path></g></svg></a>
                </div>
            </ul>
        </footer>
    </div>
</footer>
</html>
