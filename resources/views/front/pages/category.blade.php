@extends('front.index')
@section('title'){{ $category->name }}@endsection
@section('content')
    <section class="products">
        <div class="container">
            <ul class="bread row">
                <li><a href="">Главная</a></li>
                <li>/</li>
                <li><a href="">Дом и сад</a></li>
                <li>/</li>
                <li class="bread-active">Декоративная посуда</li>
            </ul>

            <div class="products__title row row-space align-center">
                <h1>Декоративная посуда</h1>
                <span>Найдено 95 товаров</span>
            </div>

            <div class="popular product-recomend card-row pruducts-cats">
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
            </div>

            <div class="products__wrapper row row-space">
                <div class="products__left">
                    <div class="products__left__mobile">
                        Фильтры
                    </div>
                    <div class="products__left__desc">
                        <div class="products__left__cats">
                            <h4>Категория</h4>
                            <ul>
                                <li class="products__left__cats--active"><a href="">Дом и сад</a></li>
                                <li><a href="">Детские товары</a></li>
                                <li><a href="">Красота и здоровье</a></li>
                                <li><a href="">Хобби и творчество</a></li>
                                <li><a href="">Одежда и обувь</a></li>
                                <li><a href="">Электроника</a></li>
                                <li><a href="">Музыка и видео</a></li>
                                <li><a href="">Катушки рыболовные</a></li>
                                <li><a href="">Очки для зрения</a></li>
                                <li><a href="">Канцелярские товары</a></li>
                                <li><a href="">Книги</a></li>
                                <li><a href="">Автоаксессуары и принадлежность</a></li>
                            </ul>
                        </div>
                        <div class="products__left__slide">
                            <div class="products__left__show row row-space align-center">
                                <h3>Подарок для</h3>
                                <img src="/assets/img/arr8.svg" alt="">
                            </div>
                            <div class="products__left__hide">
                                <select>
                                    <option selected >Ребёнка</option>
                                    <option>Пункт 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="product__check">
                            <h3>Пол</h3>
                            <label><input type="checkbox" name="gender">Мужской</label>
                            <label><input type="checkbox" name="gender">Женский</label>
                        </div>
                        <div class="products__left__range">
                            <h3>Возраст</h3>
                            <div class="products__left__range__slide">
                                <div class="products__left__value row">
                                    <label>
                                        <input type="number" id="range1" value="0">
                                        <span>От</span>
                                    </label>
                                    <label>
                                        <input type="number" id="range2" value="99">
                                        <span>До</span>
                                    </label>

                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                        <div class="products__left__slide">
                            <div class="products__left__show row row-space align-center">
                                <h3>Событие</h3>
                                <img src="/assets/img/arr8.svg" alt="">
                            </div>
                            <div class="products__left__hide">
                                <select>
                                    <option selected >Свадьба</option>
                                    <option>Пункт 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="products__left__range products__left__slide">
                            <div class="products__left__show row row-space align-center">
                                <h3>Цена</h3>
                                <img src="/assets/img/arr8.svg" alt="">
                            </div>
                            <div class="products__left__range__slide products__left__hide">
                                <div class="products__left__value row">
                                    <label>
                                        <input type="number" id="range3" value="0">
                                        <span>От</span>
                                    </label>
                                    <label>
                                        <input type="number" id="range4" value="100000">
                                        <span>До</span>
                                    </label>

                                </div>
                                <div id="slider-range2"></div>
                            </div>
                        </div>
                        <div class="product__check">
                            <label><input type="checkbox" name="filter">Распродажа</label>
                            <label><input type="checkbox" name="filter">Новинки</label>
                        </div>
                        <div class="product__check">
                            <h3>Сроки доставки</h3>
                            <label><input type="checkbox" name="time">Неважно</label>
                            <label><input type="checkbox" name="time">Сегодня</label>
                            <label><input type="checkbox" name="time">Сегодня или завтра</label>
                            <label><input type="checkbox" name="time">До 2 дней</label>
                            <label><input type="checkbox" name="time">До 5 дней</label>
                        </div>
                        <div class="product__check products__left__brands products__left__slide">
                            <div class="products__left__show row row-space align-center">
                                <h3>Бренды</h3>
                                <img src="/assets/img/arr8.svg" alt="">
                            </div>
                            <div class="products__left__brands__wrapper products__left__hide">
                                <div class="products__left__brands__item">
                                    <h4>А</h4>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                </div>
                                <div class="products__left__brands__item">
                                    <h4>Б</h4>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                </div>
                                <div class="products__left__brands__item">
                                    <h4>В</h4>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                    <label><input type="checkbox" name="brand">Бренд</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="products__right">
                    <div class="products__right__filter">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide filter-active">
                                По популярности
                            </div>
                            <div class="swiper-slide">
                                Новинки
                            </div>
                            <div class="swiper-slide">
                                Сначала дешевые
                            </div>
                            <div class="swiper-slide">
                                Сначала дорогие
                            </div>
                            <div class="swiper-slide">
                                По размеру скидки
                            </div>
                            <div class="swiper-slide">
                                Высокий рейтинг
                            </div>
                        </div>
                    </div>

                    <div class="all-items">
                        <div class="brand__grid cards popular">
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
                            </div>                        <div class="swiper-slide">
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
                            </div>                        <div class="swiper-slide">
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
                            </div>                        <div class="swiper-slide">
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
                            </div>                        <div class="swiper-slide">
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
                            </div>                        <div class="swiper-slide">
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
                            </div>                        <div class="swiper-slide">
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
                            </div>                        <div class="swiper-slide">
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
                            </div>                        <div class="swiper-slide">
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
                            </div>                        <div class="swiper-slide">
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
                            </div>                        <div class="swiper-slide">
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
                            </div>                        <div class="swiper-slide">
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
                            </div>                        <div class="swiper-slide">
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
                            </div>                        <div class="swiper-slide">
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
                            </div>                        <div class="swiper-slide">
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
                            </div>                        <div class="swiper-slide">
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
                            </div>                    </div>
                        <ul class="pagination row">
                            <li class="pagination-left"><a href="">
                                    <img src="/assets/img/arr7.svg" alt="">
                                </a></li>
                            <li class="pagination-active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li>...</li>
                            <li><a href="">11</a></li>
                            <li><a href="">12</a></li>
                            <li class="pagination-right"><a href="">
                                    <img src="/assets/img/arr7.svg" alt="">
                                </a></li>
                        </ul>
                    </div>

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
