<html>
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/main.min.css">

    <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1.0, user-scalable=no, width=device-width, minimal-ui, viewport-fit=cover">
    <!-- <link rel="shortcut icon" href="assets/img/fav.png" type="image/x-icon"> -->
    <title>@yield('title')</title>

    <!-- Useful meta tags --><meta http-eq uiv="x-ua-compatible" content="ie=edge">

    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
</head>
<body id="body">

    <menu>
        <div class="desc-menu">
            <div class="menu-close">
                <img src="/assets/img/close.svg" alt="">
            </div>
            <div class="menu__top">
                <div class="container row row-space">
                    <nav>
                        <ul class="row align-center">
                            <li><a href="">Бренды</a></li>
                            <li><a href="">Доставка</a></li>
                            <li><a href="">Оплата</a></li>
                            <li><a href="">Гарантии и возврат</a></li>
                            <li><a href="">Контакты</a></li>
                            <li><a href="">Помощь</a></li>
                            <li class="menu-mobile-li"><a href="">Статьи</a></li>
                            <li><a href="">О нас</a></li>
                        </ul>
                    </nav>
                    <div class="menu__contacts row">
                        <a href="tel:+74957556983" class="row align-center">
                            <img src="/assets/img/phone.svg" alt="">
                            +74957556983
                        </a>
                        <a href="mailto:nonamemag@gmail.com" class="row align-center">
                            <img src="/assets/img/mail.svg" alt="">
                            nonamemag@gmail.com
                        </a>
                    </div>
                    <div class="menu__login row align-center">
                        <a href="" class="menu__signin">
                            Войти
                        </a>
                        <span>/</span>
                        <a href="" class="menu__signup">
                            Зарегистрироваться
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu__bottom">
                <div class="container row row-space">
                    <a href="" class="logo">
                        <img src="/assets/img/logo.svg" alt="">
                    </a>
                    <div class="menu__catalog__wrapper row align-center">
                        <div class="menu__catalog-btn row align-center">
                            <img src="/assets/img/cat.svg" alt="">
                            Каталог
                        </div>
                        <a href="">Конструктор подарка</a>
                        <a href="">Статьи</a>
                    </div>
                    <div class="menu__search row">
                        <input type="text" placeholder="Поиск">
                        <button>
                            <img src="/assets/img/search.svg" alt="">
                        </button>
                    </div>
                    <div class="menu__settings row align-center">
                        <a href=""><img src="/assets/img/i1.svg" alt=""></a>
                        <a href=""><img src="/assets/img/i2.svg" alt=""></a>
                        <a href=""><img src="/assets/img/i3.svg" alt=""></a>
                        <a href="" class="menu__cart">
                            <img src="/assets/img/i4.svg" alt="">
                            <div class="menu__cart__number">
                                1
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile-menu">
            <div class="container row row-space align-center">
                <a href="" class="logo">
                    <img src="/assets/img/logo.svg" alt="">
                </a>
                <div class="mobile-menu__click">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>

        <div class="catalog-hide">
            <div class="menu-close">
                <img src="/assets/img/close.svg" alt="">
            </div>
            <ul class="catalog-parents">
                <li class="catalog__list__link">
                    <a href="">
                        <div class="catalog-parents__left">
                            <img src="/assets/img/m1.svg" alt="">
                            <span>Очки</span>
                        </div>
                        <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                    </a>
                    <ul class="catalog-parents">
                        <li class="catalog__list__link">
                            <a href="">
                                <div class="catalog-parents__left">
                                    <span>Очки</span>
                                </div>
                                <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                            </a>
                            <ul class="catalog-parents">
                                <li>
                                    <a href="">
                                        <div class="catalog-parents__left">
                                            <span>Очки</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="catalog-parents__left">
                                            <span>Очки</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <div class="catalog-parents__left">
                                    <span>Очки 2</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="catalog-parents__left">
                                    <span>Очки 3</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="catalog-parents__left">
                                    <span>Очки 2</span>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="catalog-parents__left">
                                    <span>Очки 3</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="catalog__list__link">
                    <a href="">
                        <div class="catalog-parents__left">
                            <img src="/assets/img/m2.svg" alt="">
                            <span>Одноразовая посуда</span>
                        </div>
                        <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                    </a>
                    <ul class="catalog-parents">
                        <li>
                            <a href="">
                                <div class="catalog-parents__left">
                                    <span>Очки</span>
                                </div>
                                <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="catalog__list__link">
                    <a href="">
                        <div class="catalog-parents__left">
                            <img src="/assets/img/m3.svg" alt="">
                            <span>Очки</span>
                        </div>
                        <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                    </a>
                    <ul class="catalog-parents">
                        <li>
                            <a href="">
                                <div class="catalog-parents__left">
                                    <span>Очки</span>
                                </div>
                                <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="catalog__list__link">
                    <a href="">
                        <div class="catalog-parents__left">
                            <img src="/assets/img/m4.svg" alt="">
                            <span>Очки</span>
                        </div>
                        <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                    </a>
                    <ul class="catalog-parents">
                        <li>
                            <a href="">
                                <div class="catalog-parents__left">
                                    <span>Очки</span>
                                </div>
                                <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="catalog__list__link">
                    <a href="">
                        <div class="catalog-parents__left">
                            <img src="/assets/img/m5.svg" alt="">
                            <span>Очки</span>
                        </div>
                        <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                    </a>
                    <ul class="catalog-parents">
                        <li>
                            <a href="">
                                <div class="catalog-parents__left">
                                    <span>Очки</span>
                                </div>
                                <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="catalog__list__link">
                    <a href="">
                        <div class="catalog-parents__left">
                            <img src="/assets/img/m6.svg" alt="">
                            <span>Очки</span>
                        </div>
                        <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                    </a>
                    <ul class="catalog-parents">
                        <li>
                            <a href="">
                                <div class="catalog-parents__left">
                                    <span>Очки</span>
                                </div>
                                <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="catalog__list__link">
                    <a href="">
                        <div class="catalog-parents__left">
                            <img src="/assets/img/m7.svg" alt="">
                            <span>Очки</span>
                        </div>
                        <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                    </a>
                    <ul class="catalog-parents">
                        <li>
                            <a href="">
                                <div class="catalog-parents__left">
                                    <span>Очки</span>
                                </div>
                                <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="catalog__list__link">
                    <a href="">
                        <div class="catalog-parents__left">
                            <img src="/assets/img/m8.svg" alt="">
                            <span>Очки</span>
                        </div>
                        <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                    </a>
                    <ul class="catalog-parents">
                        <li>
                            <a href="">
                                <div class="catalog-parents__left">
                                    <span>Очки</span>
                                </div>
                                <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="catalog__list__link">
                    <a href="">
                        <div class="catalog-parents__left">
                            <img src="/assets/img/m9.svg" alt="">
                            <span>Очки</span>
                        </div>
                        <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                    </a>
                    <ul class="catalog-parents">
                        <li>
                            <a href="">
                                <div class="catalog-parents__left">
                                    <span>Очки</span>
                                </div>
                                <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="catalog__list__link">
                    <a href="">
                        <div class="catalog-parents__left">
                            <img src="/assets/img/m10.svg" alt="">
                            <span>Очки</span>
                        </div>
                        <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                    </a>
                    <ul class="catalog-parents">
                        <li>
                            <a href="">
                                <div class="catalog-parents__left">
                                    <span>Очки</span>
                                </div>
                                <img src="/assets/img/arr4.svg" alt="" class="catalog-parents__right">
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </menu>
