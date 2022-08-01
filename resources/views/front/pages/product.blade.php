@extends('front.index')
@section('title')Product page @endsection
@section('content')
    <section class="product-top">
        <div class="container row row-space">
            <ul class="bread row bread-mobile">
                <li><a href="">Главная</a></li>
                <li>/</li>
                <li><a href="">Дом и сад</a></li>
                <li>/</li>
                <li><a href="">Декоративная посуда</a></li>
                <li>/</li>
                <li class="bread-active">Тарелка Fabulous</li>
            </ul>
            <div class="product-top__left">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product__slide__top row">
                            <div class="card__top__action">
                                <img src="/assets/img/action.svg" alt="">
                                <span>-40%</span>
                            </div>
                        </div>
                        <img src="/assets/img/product.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg" alt="">
                    </div>
                </div>
                <div class="main-slider__dots"></div>
                <div class="slider-arrows">
                    <div class="arrow-left">
                        <img src="/assets/img/arr.svg" alt="">
                    </div>
                    <div class="arrow-right">
                        <img src="/assets/img/arr.svg" alt="">
                    </div>
                </div>
            </div>

            <div class="product-top__right">
                <ul class="bread row bread-desc">
                    <li><a href="">Главная</a></li>
                    <li>/</li>
                    <li><a href="">Дом и сад</a></li>
                    <li>/</li>
                    <li><a href="">Декоративная посуда</a></li>
                    <li>/</li>
                    <li class="bread-active">Тарелка Fabulous</li>
                </ul>
                <div class="product-top__right__main row row-space">
                    <h1>
                        Кружка PrioritY "Paw Patrol / Щенячий патруль" в подарочной коробке", 200 мл, 1 шт
                    </h1>
                    <div class="product-top__right__main__right">
                        <div class="row">
                            <a href=""><img src="/assets/img/i2.svg" alt=""></a>
                            <a href=""><img src="/assets/img/i3.svg" alt=""></a>
                            <a href="" class="return"><img src="/assets/img/i5.svg" alt=""></a>
                        </div>
                        <a href="" class="collection-link">Коллекция: Spider-man</a>
                    </div>
                </div>
                <div class="row align-center product__stars">
                    <div class="row align-center">
                        <div class="card__raiting">
                            <img src="/assets/img/star.svg" alt="" class="card__raiting--active">
                            <img src="/assets/img/star.svg" alt="">
                            <img src="/assets/img/star.svg" alt="">
                            <img src="/assets/img/star.svg" alt="">
                            <img src="/assets/img/star.svg" alt="">
                        </div>
                        <div class="card__raiting__number">
                            123
                        </div>
                    </div>
                    <div class="product__code">
                        Код товара: <span>2398643Р</span>
                    </div>
                </div>
                <div class="product__actual">
                    В наличии: <span>15</span> шт
                </div>
                <div class="product__price row align-center">
                    <div class="product__price__main">
                        212 р.
                    </div>
                    <div class="card__old-price">
                        2021 р.
                    </div>
                </div>
                <div class="product__price__buttons row align-center">
                    <button class="btn in-cart btn-blue">
                        Добавить в корзину
                    </button>
                    <a href="" class="btn btn-line">Подарить</a>
                </div>
                <div class="product__check">
                    <h4>Хотите упаковать товар?</h4>
                    <label>
                        <input type="checkbox">
                        Подарочная упаковка
                    </label>
                    <label>
                        <input type="checkbox">
                        Лента
                    </label>
                    <label>
                        <input type="checkbox">
                        Бантик
                    </label>
                </div>
                <div class="product__slidein">
                    <div class="product__slidein__visible row row-space">
                        <h4>
                            Описание
                        </h4>
                        <img src="/assets/img/arr5.svg" alt="">
                    </div>
                    <div class="product__slidein__hidden">
                        <p>
                            Спасатели-щенки Зума, Маршал, Гонщик, Скай, Рокки, Крепыш и наставник Щенячьего патруля мальчик Райдер ждут тебя для совершения подвигов! Погрузись в мир мультсериала «Paw Patrol» с кружкой от компании PrioritY.
                        </p>
                    </div>
                </div>
                <div class="product__slidein">
                    <div class="product__slidein__visible row row-space">
                        <h4>
                            Характеристика
                        </h4>
                        <img src="/assets/img/arr5.svg" alt="">
                    </div>
                    <div class="product__slidein__hidden">
                        <p>
                            Спасатели-щенки Зума, Маршал, Гонщик, Скай, Рокки, Крепыш и наставник Щенячьего патруля мальчик Райдер ждут тебя для совершения подвигов! Погрузись в мир мультсериала «Paw Patrol» с кружкой от компании PrioritY.
                        </p>
                    </div>
                </div>
                <div class="product__slidein">
                    <div class="product__slidein__visible row row-space">
                        <h4>
                            Доставка
                        </h4>
                        <img src="/assets/img/arr5.svg" alt="">
                    </div>
                    <div class="product__slidein__hidden">
                        <p>
                            Спасатели-щенки Зума, Маршал, Гонщик, Скай, Рокки, Крепыш и наставник Щенячьего патруля мальчик Райдер ждут тебя для совершения подвигов! Погрузись в мир мультсериала «Paw Patrol» с кружкой от компании PrioritY.
                        </p>
                    </div>
                </div>
                <div class="product__slidein">
                    <div class="product__slidein__visible row row-space">
                        <h4>
                            Оплата и возврат
                        </h4>
                        <img src="/assets/img/arr5.svg" alt="">
                    </div>
                    <div class="product__slidein__hidden">
                        <p>
                            Спасатели-щенки Зума, Маршал, Гонщик, Скай, Рокки, Крепыш и наставник Щенячьего патруля мальчик Райдер ждут тебя для совершения подвигов! Погрузись в мир мультсериала «Paw Patrol» с кружкой от компании PrioritY.
                        </p>
                    </div>
                </div>
                <div class="product__brand row align-center">
                    <h4>Бренд:</h4>
                    <a href="" class="row align-center">
                        <img src="/assets/img/brand.png" alt="">
                        PrioritY
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Популярные товары -->
    <section class="popular product-recomend card-row">
        <div class="container">
            <h2>Вам также могут понравиться</h2>
            <div class="cards__category">
                <div class="swiper-wrapper">
                    <div class="swiper-slide cards__category--active">
                        Все
                    </div>
                    <div class="swiper-slide">
                        Детям до 6 лет
                    </div>
                    <div class="swiper-slide">
                        Игрушки
                    </div>
                    <div class="swiper-slide">
                        Посуда
                    </div>
                    <div class="swiper-slide">
                        Детям до 6 лет
                    </div>
                    <div class="swiper-slide">
                        Игрушки
                    </div>
                    <div class="swiper-slide">
                        Посуда
                    </div>
                    <div class="swiper-slide">
                        Игрушки
                    </div>
                    <div class="swiper-slide">
                        Посуда
                    </div>
                    <div class="swiper-slide">
                        Игрушки
                    </div>
                    <div class="swiper-slide">
                        Посуда
                    </div>
                    <div class="swiper-slide">
                        Посуда
                    </div>
                    <div class="swiper-slide">
                        Игрушки
                    </div>
                    <div class="swiper-slide">
                        Посуда
                    </div>
                    <div class="swiper-slide">
                        Игрушки
                    </div>
                    <div class="swiper-slide">
                        Посуда
                    </div>
                </div>
                <div class="slider-arrows">
                    <div class="arrow-left">
                        <img src="/assets/img/arr.svg" alt="">
                    </div>
                    <div class="arrow-right">
                        <img src="/assets/img/arr.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card__top">
                            <div class="card__top__left row align-center">
                                <div class="card__top__hot">
                                    <img src="/assets/img/hot.svg" alt="">
                                </div>
                                <div class="card__top__action">
                                    <img src="/assets/img/action.svg" alt="">
                                    <span>-40%</span>
                                </div>
                            </div>
                            <div class="card__like">
                                <svg width="25" height="23" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0948 3.67436L12.5 4.2346L12.9051 3.67439C13.3484 3.06156 13.8475 2.54132 14.3939 2.11866C15.4717 1.28527 16.6861 0.867188 18.0162 0.867188C19.809 0.867188 21.4509 1.58312 22.6491 2.88278C23.835 4.16913 24.5 5.9397 24.5 7.88023C24.5 9.85111 23.7723 11.6774 22.1357 13.6521L22.1357 13.6521C20.6561 15.4375 18.5194 17.2604 15.9898 19.416L15.9898 19.4161L15.9682 19.4345C15.1133 20.1631 14.1434 20.9898 13.1369 21.87L13.1367 21.8702C12.961 22.0241 12.7348 22.1092 12.5 22.1092C12.2651 22.1092 12.0391 22.0241 11.863 21.8699L11.8627 21.8696C10.8488 20.9832 9.87267 20.1512 9.01356 19.419L9.01078 19.4166L9.01075 19.4166C6.48081 17.2606 4.34413 15.4375 2.86454 13.6523C1.22786 11.6774 0.5 9.85108 0.5 7.88042C0.5 5.93971 1.16498 4.16913 2.35067 2.88278C3.54894 1.58313 5.19101 0.867188 6.98376 0.867188C8.31387 0.867188 9.52834 1.28527 10.6059 2.11863L10.6059 2.11865C11.1524 2.5413 11.6518 3.06173 12.0948 3.67436Z" fill="transparent" stroke="#4F28EA"/>
                                </svg>
                            </div>
                        </div>
                        <div class="card__img">
                            <img src="/assets/img/item1.png" alt="" class="card__img">
                        </div>
                        <a href="" class="card__name">Название товара Название товара</a>
                        <div class="card__middle row row-space">
                            <div class="card__count">
                                В наличии: <span>15</span> шт
                            </div>
                            <div class="card__old-price">
                                <span>4600</span> р.
                            </div>
                        </div>

                        <div class="card__bottom row row-space">
                            <div class="card__raiting">
                                <img src="/assets/img/star.svg" alt="" class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt=""  class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt=""  class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt="">
                                <img src="/assets/img/star.svg" alt="">
                            </div>
                            <div class="card__price">
                                <span>2500</span> р.
                            </div>
                        </div>
                        <div class="btn card__btn">
                            Добавить в корзину
                        </div>
                        <a href="" class="card__fast">Быстрый просмотр</a>
                    </div>
                    <div class="swiper-slide">
                        <div class="card__top">
                            <div class="card__top__left row align-center">
                                <div class="card__top__hot">
                                    <img src="/assets/img/hot.svg" alt="">
                                </div>
                                <div class="card__top__action">
                                    <img src="/assets/img/action.svg" alt="">
                                    <span>-40%</span>
                                </div>
                            </div>
                            <div class="card__like">
                                <svg width="25" height="23" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0948 3.67436L12.5 4.2346L12.9051 3.67439C13.3484 3.06156 13.8475 2.54132 14.3939 2.11866C15.4717 1.28527 16.6861 0.867188 18.0162 0.867188C19.809 0.867188 21.4509 1.58312 22.6491 2.88278C23.835 4.16913 24.5 5.9397 24.5 7.88023C24.5 9.85111 23.7723 11.6774 22.1357 13.6521L22.1357 13.6521C20.6561 15.4375 18.5194 17.2604 15.9898 19.416L15.9898 19.4161L15.9682 19.4345C15.1133 20.1631 14.1434 20.9898 13.1369 21.87L13.1367 21.8702C12.961 22.0241 12.7348 22.1092 12.5 22.1092C12.2651 22.1092 12.0391 22.0241 11.863 21.8699L11.8627 21.8696C10.8488 20.9832 9.87267 20.1512 9.01356 19.419L9.01078 19.4166L9.01075 19.4166C6.48081 17.2606 4.34413 15.4375 2.86454 13.6523C1.22786 11.6774 0.5 9.85108 0.5 7.88042C0.5 5.93971 1.16498 4.16913 2.35067 2.88278C3.54894 1.58313 5.19101 0.867188 6.98376 0.867188C8.31387 0.867188 9.52834 1.28527 10.6059 2.11863L10.6059 2.11865C11.1524 2.5413 11.6518 3.06173 12.0948 3.67436Z" fill="transparent" stroke="#4F28EA"/>
                                </svg>
                            </div>
                        </div>
                        <div class="card__img">
                            <img src="/assets/img/item1.png" alt="" class="card__img">
                        </div>
                        <a href="" class="card__name">Название товара Название товара</a>
                        <div class="card__middle row row-space">
                            <div class="card__count">
                                В наличии: <span>15</span> шт
                            </div>
                            <div class="card__old-price">
                                <span>4600</span> р.
                            </div>
                        </div>

                        <div class="card__bottom row row-space">
                            <div class="card__raiting">
                                <img src="/assets/img/star.svg" alt="" class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt=""  class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt=""  class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt="">
                                <img src="/assets/img/star.svg" alt="">
                            </div>
                            <div class="card__price">
                                <span>2500</span> р.
                            </div>
                        </div>
                        <div class="btn card__btn">
                            Добавить в корзину
                        </div>
                        <a href="" class="card__fast">Быстрый просмотр</a>
                    </div>
                    <div class="swiper-slide">
                        <div class="card__top">
                            <div class="card__top__left row align-center">
                                <div class="card__top__hot">
                                    <img src="/assets/img/hot.svg" alt="">
                                </div>
                                <div class="card__top__action">
                                    <img src="/assets/img/action.svg" alt="">
                                    <span>-40%</span>
                                </div>
                            </div>
                            <div class="card__like">
                                <svg width="25" height="23" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0948 3.67436L12.5 4.2346L12.9051 3.67439C13.3484 3.06156 13.8475 2.54132 14.3939 2.11866C15.4717 1.28527 16.6861 0.867188 18.0162 0.867188C19.809 0.867188 21.4509 1.58312 22.6491 2.88278C23.835 4.16913 24.5 5.9397 24.5 7.88023C24.5 9.85111 23.7723 11.6774 22.1357 13.6521L22.1357 13.6521C20.6561 15.4375 18.5194 17.2604 15.9898 19.416L15.9898 19.4161L15.9682 19.4345C15.1133 20.1631 14.1434 20.9898 13.1369 21.87L13.1367 21.8702C12.961 22.0241 12.7348 22.1092 12.5 22.1092C12.2651 22.1092 12.0391 22.0241 11.863 21.8699L11.8627 21.8696C10.8488 20.9832 9.87267 20.1512 9.01356 19.419L9.01078 19.4166L9.01075 19.4166C6.48081 17.2606 4.34413 15.4375 2.86454 13.6523C1.22786 11.6774 0.5 9.85108 0.5 7.88042C0.5 5.93971 1.16498 4.16913 2.35067 2.88278C3.54894 1.58313 5.19101 0.867188 6.98376 0.867188C8.31387 0.867188 9.52834 1.28527 10.6059 2.11863L10.6059 2.11865C11.1524 2.5413 11.6518 3.06173 12.0948 3.67436Z" fill="transparent" stroke="#4F28EA"/>
                                </svg>
                            </div>
                        </div>
                        <div class="card__img">
                            <img src="/assets/img/item1.png" alt="" class="card__img">
                        </div>
                        <a href="" class="card__name">Название товара Название товара</a>
                        <div class="card__middle row row-space">
                            <div class="card__count">
                                В наличии: <span>15</span> шт
                            </div>
                            <div class="card__old-price">
                                <span>4600</span> р.
                            </div>
                        </div>

                        <div class="card__bottom row row-space">
                            <div class="card__raiting">
                                <img src="/assets/img/star.svg" alt="" class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt=""  class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt=""  class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt="">
                                <img src="/assets/img/star.svg" alt="">
                            </div>
                            <div class="card__price">
                                <span>2500</span> р.
                            </div>
                        </div>
                        <div class="btn card__btn">
                            Добавить в корзину
                        </div>
                        <a href="" class="card__fast">Быстрый просмотр</a>
                    </div>
                    <div class="swiper-slide">
                        <div class="card__top">
                            <div class="card__top__left row align-center">
                                <div class="card__top__hot">
                                    <img src="/assets/img/hot.svg" alt="">
                                </div>
                                <div class="card__top__action">
                                    <img src="/assets/img/action.svg" alt="">
                                    <span>-40%</span>
                                </div>
                            </div>
                            <div class="card__like">
                                <svg width="25" height="23" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0948 3.67436L12.5 4.2346L12.9051 3.67439C13.3484 3.06156 13.8475 2.54132 14.3939 2.11866C15.4717 1.28527 16.6861 0.867188 18.0162 0.867188C19.809 0.867188 21.4509 1.58312 22.6491 2.88278C23.835 4.16913 24.5 5.9397 24.5 7.88023C24.5 9.85111 23.7723 11.6774 22.1357 13.6521L22.1357 13.6521C20.6561 15.4375 18.5194 17.2604 15.9898 19.416L15.9898 19.4161L15.9682 19.4345C15.1133 20.1631 14.1434 20.9898 13.1369 21.87L13.1367 21.8702C12.961 22.0241 12.7348 22.1092 12.5 22.1092C12.2651 22.1092 12.0391 22.0241 11.863 21.8699L11.8627 21.8696C10.8488 20.9832 9.87267 20.1512 9.01356 19.419L9.01078 19.4166L9.01075 19.4166C6.48081 17.2606 4.34413 15.4375 2.86454 13.6523C1.22786 11.6774 0.5 9.85108 0.5 7.88042C0.5 5.93971 1.16498 4.16913 2.35067 2.88278C3.54894 1.58313 5.19101 0.867188 6.98376 0.867188C8.31387 0.867188 9.52834 1.28527 10.6059 2.11863L10.6059 2.11865C11.1524 2.5413 11.6518 3.06173 12.0948 3.67436Z" fill="transparent" stroke="#4F28EA"/>
                                </svg>
                            </div>
                        </div>
                        <div class="card__img">
                            <img src="/assets/img/item1.png" alt="" class="card__img">
                        </div>
                        <a href="" class="card__name">Название товара Название товара</a>
                        <div class="card__middle row row-space">
                            <div class="card__count">
                                В наличии: <span>15</span> шт
                            </div>
                            <div class="card__old-price">
                                <span>4600</span> р.
                            </div>
                        </div>

                        <div class="card__bottom row row-space">
                            <div class="card__raiting">
                                <img src="/assets/img/star.svg" alt="" class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt=""  class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt=""  class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt="">
                                <img src="/assets/img/star.svg" alt="">
                            </div>
                            <div class="card__price">
                                <span>2500</span> р.
                            </div>
                        </div>
                        <div class="btn card__btn">
                            Добавить в корзину
                        </div>
                        <a href="" class="card__fast">Быстрый просмотр</a>
                    </div>
                    <div class="swiper-slide">
                        <div class="card__top">
                            <div class="card__top__left row align-center">
                                <div class="card__top__hot">
                                    <img src="/assets/img/hot.svg" alt="">
                                </div>
                                <div class="card__top__action">
                                    <img src="/assets/img/action.svg" alt="">
                                    <span>-40%</span>
                                </div>
                            </div>
                            <div class="card__like">
                                <svg width="25" height="23" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0948 3.67436L12.5 4.2346L12.9051 3.67439C13.3484 3.06156 13.8475 2.54132 14.3939 2.11866C15.4717 1.28527 16.6861 0.867188 18.0162 0.867188C19.809 0.867188 21.4509 1.58312 22.6491 2.88278C23.835 4.16913 24.5 5.9397 24.5 7.88023C24.5 9.85111 23.7723 11.6774 22.1357 13.6521L22.1357 13.6521C20.6561 15.4375 18.5194 17.2604 15.9898 19.416L15.9898 19.4161L15.9682 19.4345C15.1133 20.1631 14.1434 20.9898 13.1369 21.87L13.1367 21.8702C12.961 22.0241 12.7348 22.1092 12.5 22.1092C12.2651 22.1092 12.0391 22.0241 11.863 21.8699L11.8627 21.8696C10.8488 20.9832 9.87267 20.1512 9.01356 19.419L9.01078 19.4166L9.01075 19.4166C6.48081 17.2606 4.34413 15.4375 2.86454 13.6523C1.22786 11.6774 0.5 9.85108 0.5 7.88042C0.5 5.93971 1.16498 4.16913 2.35067 2.88278C3.54894 1.58313 5.19101 0.867188 6.98376 0.867188C8.31387 0.867188 9.52834 1.28527 10.6059 2.11863L10.6059 2.11865C11.1524 2.5413 11.6518 3.06173 12.0948 3.67436Z" fill="transparent" stroke="#4F28EA"/>
                                </svg>
                            </div>
                        </div>
                        <div class="card__img">
                            <img src="/assets/img/item1.png" alt="" class="card__img">
                        </div>
                        <a href="" class="card__name">Название товара Название товара</a>
                        <div class="card__middle row row-space">
                            <div class="card__count">
                                В наличии: <span>15</span> шт
                            </div>
                            <div class="card__old-price">
                                <span>4600</span> р.
                            </div>
                        </div>

                        <div class="card__bottom row row-space">
                            <div class="card__raiting">
                                <img src="/assets/img/star.svg" alt="" class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt=""  class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt=""  class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt="">
                                <img src="/assets/img/star.svg" alt="">
                            </div>
                            <div class="card__price">
                                <span>2500</span> р.
                            </div>
                        </div>
                        <div class="btn card__btn">
                            Добавить в корзину
                        </div>
                        <a href="" class="card__fast">Быстрый просмотр</a>
                    </div>

                </div>
                <div class="main-slider__dots"></div>
            </div>
        </div>
        <div class="slider-arrows slider-arrows-main">
            <div class="arrow-left">
                <img src="/assets/img/arr.svg" alt="">
            </div>
            <div class="arrow-right">
                <img src="/assets/img/arr.svg" alt="">
            </div>
        </div>
    </section>

    <!-- Отзывы -->
    <section class="review">
        <div class="container">
            <h2>Отзывы покупателей</h2>
            <div class="review__wrapper row row-space">
                <div class="review__left">

                    <div class="review__item">
                        <div class="review__name">
                            Валерий
                        </div>
                        <div class="row align-center">
                            <div class="card__raiting">
                                <img src="/assets/img/star.svg" alt="" class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt=""  class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt=""  class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt="">
                                <img src="/assets/img/star.svg" alt="">
                            </div>
                            <div class="review__date">
                                12.12.2021
                            </div>
                        </div>
                        <div class="review__body">
                            <p>
                                Современные технологии достигли такого уровня, что граница обучения кадров требует анализа стандартных подходов. В частности, повышение уровня гражданского сознания обеспечивает
                            </p>
                        </div>
                        <div class="review__info">
                            <div class="review__info__name">
                                Достоинства:
                            </div>
                            <div class="review__info__text">
                                Цена и качество
                            </div>
                        </div>
                        <div class="review__info">
                            <div class="review__info__name">
                                Недостатки:
                            </div>
                            <div class="review__info__text">
                                Не обнаружил
                            </div>
                        </div>
                        <div class="review__info">
                            <div class="review__info__name">
                                Ccылки:
                            </div>
                            <div class="review__info__text">
                                <a href="https://www.ozon.ru/context/detail/id/162478613/">https://www.ozon.ru/context/detail/id/162478613/</a>

                            </div>
                        </div>
                        <button class="review__response row">
                            <img src="/assets/img/arr6.svg" alt="">
                            Ответить
                        </button>
                    </div>
                    <div class="review__item">
                        <div class="review__name">
                            Валерий
                        </div>
                        <div class="row">
                            <div class="card__raiting">
                                <img src="/assets/img/star.svg" alt="">
                                <img src="/assets/img/star.svg" alt="">
                                <img src="/assets/img/star.svg" alt="">
                                <img src="/assets/img/star.svg" alt="">
                                <img src="/assets/img/star.svg" alt="">
                            </div>
                            <div class="review__date">
                                12.12.2021
                            </div>
                        </div>
                        <div class="review__body">
                            <p>
                                Современные технологии достигли такого уровня, что граница обучения кадров требует анализа стандартных подходов. В частности, повышение уровня гражданского сознания обеспечивает
                            </p>
                        </div>
                        <div class="review__info">
                            <div class="review__info__name">
                                Достоинства:
                            </div>
                            <div class="review__info__text">
                                Цена и качество
                            </div>
                        </div>
                        <div class="review__info">
                            <div class="review__info__name">
                                Недостатки:
                            </div>
                            <div class="review__info__text">
                                Не обнаружил
                            </div>
                        </div>
                        <div class="review__info">
                            <div class="review__info__name">
                                Ccылки:
                            </div>
                            <div class="review__info__text">
                                https://www.ozon.ru/context/detail/id/162478613/
                            </div>
                        </div>
                        <button class="review__response row">
                            <img src="/assets/img/arr6.svg" alt="">
                            Ответить
                        </button>
                    </div>
                    <button class="review__all">
                        Посмотреть все отзывы
                    </button>
                </div>
                <div class="review__right">
                    <h3>Оценка пользователей</h3>
                    <div class="row">
                        <div class="review__total">
                            4.0
                        </div>
                        <div class="review__total__stars">
                            <div class="card__raiting">
                                <img src="/assets/img/star.svg" alt="" class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt=""  class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt=""  class="card__raiting--active">
                                <img src="/assets/img/star.svg" alt="">
                                <img src="/assets/img/star.svg" alt="">
                            </div>
                            <p>Отзывов 149</p>
                        </div>
                    </div>
                    <div class="review__table">
                        <div class="review__table__row row">
                            <span>5 звёзд</span>
                            <div class="review__table__indicator" data-number="80"></div>
                        </div>
                        <div class="review__table__row row">
                            <span>4 звезды</span>
                            <div class="review__table__indicator" data-number="50"></div>
                        </div>
                        <div class="review__table__row row">
                            <span>3 звезды</span>
                            <div class="review__table__indicator" data-number="30"></div>
                        </div>
                        <div class="review__table__row row">
                            <span>2 звезды</span>
                            <div class="review__table__indicator" data-number="0"></div>
                        </div>
                        <div class="review__table__row row">
                            <span>1 звезда</span>
                            <div class="review__table__indicator" data-number="0"></div>
                        </div>
                    </div>
                    <button class="btn in-cart">
                        Оставить отзыв
                    </button>
                    <p class="review__credits">
                        Получите баллы на скидку за отзыв о покупке!
                    </p>
                </div>
            </div>


        </div>
    </section>

    <div class="popup-product">
        <div class="popup-product__wrapper">
            <div class="popup-product__content">
                <div class="popup-close">
                    <img src="/assets/img/close.svg" alt="">
                </div>
                <section class="product-top">
                    <div class="row row-space">
                        <div class="product-top__left">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product__slide__top row">
                                        <div class="card__top__action">
                                            <img src="/assets/img/action.svg" alt="">
                                            <span>-40%</span>
                                        </div>
                                    </div>
                                    <img src="/assets/img/product.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg" alt="">
                                </div>
                            </div>
                            <div class="main-slider__dots"></div>
                            <div class="slider-arrows">
                                <div class="arrow-left">
                                    <img src="/assets/img/arr.svg" alt="">
                                </div>
                                <div class="arrow-right">
                                    <img src="/assets/img/arr.svg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="product-top__right">
                            <div class="product-top__right__main row row-space">
                                <h1>
                                    Кружка PrioritY "Paw Patrol / Щенячий патруль" в подарочной коробке", 200 мл, 1 шт
                                </h1>
                                <div class="product-top__right__main__right">
                                    <a href="" class="return"><img src="/assets/img/pop1.svg" alt=""></a>
                                    <a href="" class="popup__btn"><img src="/assets/img/pop2.svg" alt=""></a>
                                    <a href="" class="popup__btn"><img src="/assets/img/pop3.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="row align-center product__stars">
                                <div class="row align-center">
                                    <div class="card__raiting">
                                        <img src="/assets/img/star.svg" alt="" class="card__raiting--active">
                                        <img src="/assets/img/star.svg" alt="">
                                        <img src="/assets/img/star.svg" alt="">
                                        <img src="/assets/img/star.svg" alt="">
                                        <img src="/assets/img/star.svg" alt="">
                                    </div>
                                    <div class="card__raiting__number">
                                        123
                                    </div>
                                </div>
                                <div class="product__code">
                                    Код товара: <span>2398643Р</span>
                                </div>
                            </div>
                            <div class="product__actual">
                                В наличии: <span>15</span> шт
                            </div>
                            <div class="product__price row align-center">
                                <div class="product__price__main">
                                    212 р.
                                </div>
                                <div class="card__old-price">
                                    2021 р.
                                </div>
                            </div>
                            <div class="product__descr">
                                <div class="product__slidein__visible row row-space">
                                    <h4>
                                        Описание
                                    </h4>
                                </div>
                                <div class="product__descr__text">
                                    <p>
                                        Спасатели-щенки Зума, Маршал, Гонщик, Скай, Рокки, Крепыш и наставник Щенячьего патруля мальчик Райдер ждут тебя для совершения подвигов! Погрузись в мир мультсериала «Paw Patrol» с кружкой от компании PrioritY.
                                    </p>
                                </div>
                            </div>
                            <div class="product__price__buttons row align-center">
                                <button class="btn card__btn">
                                    Добавить в корзину
                                </button>
                                <a href="" class="product__route">Посмотреть полностью</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
