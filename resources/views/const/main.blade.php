<?php
$title = \App\Models\Title::first();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
</head>

<body class="body">
<!-- header -->
<header id="header" class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__left">
                <button class="burger">
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                </button>
                <a class="header__logo" href="/">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($title->header_loo) }}" alt="logo"/>
                </a>
                <p class="header__left-info">
                    {{ $title->general_title }}
                </p>
                <p class="header__left-text">{{ $title->header_title }}</p>
            </div>
            <div class="header__contacts">
                <a href="tel: {{ $title->phone }}" class="header__contacts-phone"
                >{{ $title->phone }}</a
                >
                <button class="header__contacts-btn">Обратный звонок</button>
            </div>
        </div>
    </div>

    <!-- menu -->
    <div id="header-menu" class="header__menu">
        <div class="container">
            <nav class="header__menu-nav">
                <ul class="header__menu-list">
                    <li class="header__menu-item">
                        <a href="{{ route('about')  }}" class="header__menu-link"> О компании </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="{{ route('design') }}" class="header__menu-link">
                            Проектирование
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="{{ route('building') }}" class="header__menu-link">
                            Строительство
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="{{ route('consulting') }}" class="header__menu-link">
                            Консалтинг и юридические услуги
                        </a>
                    </li>
                    <li class="header__menu-item">
                        <a href="{{ route('engineering') }}" class="header__menu-link">
                            Инжиниринговые услуги
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
@yield('content')
<!-- questions -->
<section id="questions" class="questions">
    <div class="container">
        <h3 class="questions__title home__title-white">
            <span>Есть вопросы?</span> Пишите нам
        </h3>
        <form method="post" action="{{ route('application') }}" class="questions__form">
            @csrf
            <div class="questions__form-inner">
                <div class="questions__form-input">
                    <label class="questions__label"> Ваше имя </label>
                    <input class="questions__input" name="name" type="text" placeholder="Введите имя" />
                </div>
                <div class="questions__form-input">
                    <label class="questions__label" for="tel"> Ваш телефон </label>
                    <input class="questions__input" type="text" attrname="telephone1" name="phone" placeholder="+7 (" />
                </div>
                <button class="button questions__btn">Отправить</button>
            </div>
            <div class="questions__personal">
                <input
                        class="questions__personal-input"
                        type="checkbox"
                        name="checkbox"
                        value="value"
                        id="questions__checkbox"
                />
                <label class="questions__personal-label" for="questions__checkbox">
                    Я даю своё согласие на обработку
                </label>
            </div>
        </form>
    </div>
</section>

<!-- footer -->
<footer id="footer" class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__logo">
                <a class="footer__logo-link" href="/">
                    <img class="footer__logo-img" src="{{ \Illuminate\Support\Facades\Storage::url($title->footer_logo) }}" alt="" />
                </a>
                <p class="footer__logo-text">
                    Проектирование и строительство нежилых помещений
                </p>
            </div>
            <div class="footer__developed">
                <p class="footer__developed-text">Разработано в</p>
                <a class="footer__developed-link" target="_blank" href="https://www.a-lux.kz/">
                    <img class="footer__developed-img" src="../images/alux-logo.png" alt="" />
                </a>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/main.min.js') }}"></script>
<script src="{{ asset('js/vanilla-masker.min.js') }}"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</body>
</html>
