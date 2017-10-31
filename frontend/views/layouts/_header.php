<?php
/**
 * Created by PhpStorm.
 * User: denisov
 * Date: 16.10.2017
 * Time: 10:40
 */
use \yii\helpers\Url;
?>

<header>
    <div class="t-container">
        <ul class="just-between">
            <li class="text-logo">
                <p>Интернет-магазин наклеек</p>
            </li>
            <li class="email">
                <img src="/img/icon/email.png" alt="icon">
                <a href="mailto:4545600@mail.ru" target="_top">4545600@mail.ru</a>
            </li>
            <li class="reg">
                <ul>
                    <li class="top-link top-links"  >
                        <!-- <img src="/img/icon/user.png"  alt="icon"> -->
                        <span>Регистрация</span>
                        <div class="registration">
                            <div class="titlespan">
                                <input type="text" placeholder="Ваш логин " class="vashe">
                                <span> Для регистрации введите Логин</span>
                            </div>
                            <div class="titlespan">
                                <input type="text" placeholder="Ваш Email" class="vashee" >
                                        <span> Для регистрации введите адрес Вашей
                                        электронной почты </span>
                            </div>
                            <div class="titlespan">
                                <input type="password" placeholder="Ваш пароль" class="vashpor" >
                                <span> Для регистрации введите пароль</span>
                            </div>
                            <div class="titlespan">
                                <input type="password" placeholder="Повторите пароль" class="vashporr" >
                                <span> Для регистрации повторите ваш пароль</span>
                            </div>
                            <div class="textkod">Введите код с картинки</div>
                            <div class="kodskar">
                                <img src="/img/icon/kod.png" alt="" class="imgkod">
                                <input type="text" class="kod" >
                            </div>
                            <a href="#" class="vhodd">Зарегистрироваться</a><br>
                            <div class="voyti"><span class="voytit">Зарегистрироваться с помощью </span>
                                <a href="https://www.facebook.com/" target="_blank"><img src="/img/icon/facebook1.png" alt="" class="cosseti" ></a>
                                <a href="https://www.instagram.com/" target="_blank"> <img src="/img/icon/instagram1.png" alt="" class="cossetis"> </a>
                            </div>
                        </div>
                    </li>
                    <li class="top-link top-linkss" >
                        <span>Вход</span>
                        <div class="vhod">
                            <div class="titlespan">
                                <input type="text" placeholder="Ваш логин или Email" class="vashe" title="Для входа введите свой логин или Email"><br>
                                <span>Для входа введите ваш логин или Email</span>
                            </div>
                            <div class="titlespan"><input type="password" placeholder="Ваш пароль" class="vashpor" >
                                <span>Для входа введите ваш пароль</span>
                            </div>
                            <div class="textkod">Введите код с картинки</div>
                            <div class="kodskar"><img src="/img/icon/kod.png" alt="" class="imgkod">
                                <input type="text" class="kod" >
                            </div>
                            <a href="#" class="vhodd">Войти</a><br>
                            <a href="#" class="zabili">Забыли пароль?</a><br>
                            <div class="voytit">
                                <span class="voytit">Войти  помощью</span>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <img src="/img/icon/facebook1.png" alt="" class="cosseti" >
                                </a>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <img src="/img/icon/instagram1.png" alt="" class="cossetis">
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
            <?=  \frontend\widgets\LanguageSelector::widget()?>
            </li>

        </ul>
    </div>

    <div class="header-600">
        <p>Интернет-магазин наклеек</p>
        <div class="two-header">
            <div class="header-left">
                <img class="burger-s par2" src="/img/burger-2.png" alt="">
                <img class="par7" src="/img/krest.png" alt="">
                <img class="par3" src="/img/magnify-24.png" alt="">
                <img class="par8" src="/img/krest.png" alt="">
            </div>
            <div class="header-center">
                <img src="/img/logo-2.png" alt="">
            </div>
            <div class="header-big">
                <div>
                    <p class="header-right">
                        <a href="#">EN</a>|
                        <a href="#">RU</a>
                    </p>
                </div>
                <div class="header-right">
                    <img class="top-hov-1" src="/img/key-2.png" alt="">
                    <img class="top-hov-2" src="/img/exit-2.png" alt="">
                    <div>
                        <div class="top-win">
                            <div class="registration">
                                <p ><a class="ss-1" href="#">Вход</a><a class="ss-2" href="#">Регистрация</a></p>

                                <span class="closes-popup save-popup-closse">+</span>
                                <div class="titlespan">
                                    <input type="text" placeholder="Ваш логин " class="vashe">
                                    <span> Для регистрации введите Логин</span>
                                </div>
                                <div class="titlespan">
                                    <input type="text" placeholder="Ваш Email" class="vashee" >
                                            <span> Для регистрации введите адрес Вашей
                                            электронной почты </span>
                                </div>
                                <div class="titlespan">
                                    <input type="password" placeholder="Ваш пароль" class="vashpor" >
                                    <span> Для регистрации введите пароль</span>
                                </div>
                                <div class="titlespan">
                                    <input type="password" placeholder="Повторите пароль" class="vashporr" >
                                    <span> Для регистрации повторите ваш пароль</span>
                                </div>
                                <div class="textkod">Введите код с картинки</div>
                                <div class="kodskar">
                                    <img src="/img/icon/kod.png" alt="" class="imgkod">
                                    <input type="text" class="kod" >
                                </div>
                                <a href="#" class="vhodd">Зарегистрироваться</a><br>
                                <div class="voyti"><span class="voytit">Зарегистрироваться с помощью </span>
                                    <a href="https://www.facebook.com/" target="_blank"><img src="/img/icon/facebook1.png" alt="" class="cosseti" ></a>
                                    <a href="https://www.instagram.com/" target="_blank"> <img src="/img/icon/instagram1.png" alt="" class="cossetis"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="top-win2">
                            <div class="vhod">
                                <p ><a class="ss-1 a" href="#">Вход</a><a  class="ss-2 b" href="#" ">Регистрация</a></p>

                                <span class="closes-popup save-popup-closse">+</span>
                                <div class="titlespan">
                                    <input type="text" placeholder="Ваш логин или Email" class="vashe" title="Для входа введите свой логин или Email"><br>
                                    <span>Для входа введите ваш логин или Email</span>
                                </div>
                                <div class="titlespan"><input type="password" placeholder="Ваш пароль" class="vashpor" >
                                    <span>Для входа введите ваш пароль</span>
                                </div>
                                <div class="textkod">Введите код с картинки</div>
                                <div class="kodskar"><img src="/img/icon/kod.png" alt="" class="imgkod">
                                    <input type="text" class="kod" >
                                </div>
                                <a href="#" class="vhodd">Войти</a><br>
                                <a href="#" class="zabili">Забыли пароль?</a><br>
                                <div class="voytit">
                                    <span class="voytit">Войти  помощью</span>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <img src="/img/icon/facebook1.png" alt="" class="cosseti" >
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <img src="/img/icon/instagram1.png" alt="" class="cossetis">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-burger">
        <div class="burger-menu">
            <ul>
                <li><a href="<?= Url::to(['site/index'])?>">Главная</a></li>
                <li><a href="#">О компании</a></li>
                <li><a href="#">Как пользоваться сайтом?</a></li>
                <li><a href="#">Часто задаваемые вопросы</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="#">статья</a></li>
                <li><a href="#">новости</a></li>
            </ul>
        </div>
        <div class="block-color">
            <div class="flex-dlock">
                <div class="block-one">
                    <img src="/img/list-3.png" alt="">
                    <a href="#">4545600@mail.ru</a>
                </div>
                <div class="block-two">
                    <a href="#"><img src="/img/fsb.png" alt=""></a>
                    <a href="#"><img src="/img/instagram.png" alt=""></a>
                </div>
            </div>
            <div class="flex-dlock">
                <div>
                    <button>Как заказать наклейку?</button>
                </div>
                <div class="img-posit">
                    <img src="/img/cart.png" alt="">
                    <div class="span-1">3</div>
                </div>
            </div>
        </div>
        <div class="block-bak">
            <div class="slide" id="toggle-cart">
                <div class="tu-block">
                    <img src="/img/img-28.png" alt="">
                    <p>Очень длинное название наклейки</p>
                    <img src="/img/krestt.png" alt="">
                </div>
                <div class="tu-block">
                    <img src="/img/img-28.png" alt="">
                    <p>Очень длинное название наклейки</p>
                    <img src="/img/krestt.png" alt="">
                </div>
            </div>
            <div class="bottom-block">
                <p class="paar2">Разввернуть корзину</p>
                <p class="paar2">Свернуть корзину</p>
                <img src="/img/arrow-11.png" alt="">
            </div>
        </div>
    </div>
</header>


<div class="t-cont-mob t-containere">
    <div class="search-block-fuul">
        <input type="text" class="searchblock" id="kek1" placeholder="Введите ключевое слово">
    </div>
    <div class="search">
        <div class="search-block">
            <!-- left -->
            <div class="left-btn">
                <div class="women-tatu">Женские наклейки
                            <span>
                                <span class="skriva">Убрать из списка</span>
                            </span>
                </div>
                <div class="up-tatu">Растительные наклейки
                            <span>
                                <span class="skriva">Убрать из списка</span>
                            </span>
                </div>
                <div class="add-category">
                    <span class="add-categoryyy">Добавить категорию </span>
                    <span class="add-categoryy">▼</span>
                    <div class="categor">
                        <ul class="categoryy">
                            <li>
                                <span class="arou" >Природа </span>
                                <span class="span2lv"> ▼</span>
                                <ul class="categoryyy">
                                    <li>
                                        <span class="arou">Цветы</span>
                                    </li>
                                    <li>
                                        <span class="arou">Раститения</span>
                                    </li>
                                    <li>
                                        <span class="arou">Деревья</span>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="arou" >Авто </span>
                                <span class="span2lv"> ▼</span>
                                <ul class="categoryyy">
                                    <li>
                                        <span class="arou">Дорожные</span>
                                    </li>
                                    <li>
                                        <span class="arou">Знаки</span>
                                    </li>
                                    <li>
                                        <span class="arou">Марки</span>
                                    </li>
                                    <li>
                                        <span class="arou">Модели</span>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="arou" >Животные </span>
                                <span class="span2lv"> ▼</span>
                                <ul class="categoryyy">
                                    <li>
                                        <span class="arou">Коты</span>
                                    </li>
                                    <li>
                                        <span class="arou">Собаки</span>
                                    </li>
                                    <li>
                                        <span class="arou">Рыбкы</span>
                                    </li>
                                    <li>
                                        <span class="arou">Птицы</span>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <span class="arou" >Детские </span>
                                <span class="span2lv"> ▼</span>
                                <ul class="categoryyy">
                                    <li>
                                        <span class="arou">Герои мыльтфильмов</span>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <span class="arou" >Музыка </span>
                                <span class="span2lv"> ▼</span>
                                <ul class="categoryyy">
                                    <li>
                                        <span class="arou">Джаз</span>
                                    </li>
                                    <li>
                                        <span class="arou">Ключ</span>
                                    </li>
                                    <li>
                                        <span class="arou">Рок</span>
                                    </li>
                                    <li>
                                        <span class="arou">Гитара</span>
                                    </li>
                                    <li>
                                        <span class="arou">Клавиатура</span>
                                    </li>
                                    <li>
                                        <span class="arou"></span>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="arou" >Информационные </span>
                                <span class="span2lv"> ▼</span>
                                <ul class="categoryyy">
                                    <li>
                                        <span class="arou">Номера домов</span>
                                    </li>
                                    <li>
                                        <span class="arou">Дорожные знаки</span>
                                    </li>
                                    <li>
                                        <span class="arou">В помещении</span>
                                    </li>
                                    <li>
                                        <span class="arou">На авто</span>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <span class="arou" >Спорт </span>
                                <span class="span2lv"> ▼</span>
                                <ul class="categoryyy">
                                    <li>
                                        <span class="arou">Футбол</span>
                                    </li>
                                    <li>
                                        <span class="arou">Баскетбол</span>
                                    </li>
                                    <li>
                                        <span class="arou">Гольф</span>
                                    </li>
                                    <li>
                                        <span class="arou">Тенис</span>
                                    </li>
                                    <li>
                                        <span class="arou">Горах</span>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="arou" >Любовь </span>
                                <span class="span2lv"> ▼</span>
                                <ul class="categoryyy">
                                    <li>
                                        <span class="arou">Вдвоем</span>
                                    </li>
                                    <li>
                                        <span class="arou">Сердечки</span>
                                    </li>
                                    <li>
                                        <span class="arou">Слова</span>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="arou" >Праздники </span>
                                <span class="span2lv"> ▼</span>
                                <ul class="categoryyy">
                                    <li>
                                        <span class="arou">Новый год</span>
                                    </li>
                                    <li>
                                        <span class="arou">Пасха</span>
                                    </li>
                                    <li>
                                        <span class="arou">Троица</span>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="arou" >Христианские </span>
                                <span class="span2lv"> ▼</span>
                                <ul class="categoryyy">
                                    <li>
                                        <span class="arou">Церковь</span>
                                    </li>
                                    <li>
                                        <span class="arou">Рыбка</span>
                                    </li>
                                    <li>
                                        <span class="arou">Служение христа</span>
                                    </li>
                                    <li>
                                        <span class="arou">Библейские истории</span>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="arou" >География </span>
                                <span class="span2lv"> ▼</span>
                                <ul class="categoryyy">
                                    <li>
                                        <span class="arou">Города</span>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- <div class="search-block-fuul">
                <input type="text" class="searchblock" placeholder="Введите ключевое слово">
            </div> -->
            <!-- right -->
            <!-- <div class="rod">
                <button class="bot-top">Показать еще</button>
                <img class="img-top-1" src="/img/arow-19.png" alt="">
            </div> -->
        </div>
    </div>
</div>

<!-- Navigation menu-->
<nav class="navi back">
    <div class="just-between t-container">
        <div class="logo">
            <a href="<?= Url::to(['site/index'])?>">
                <img src="/img/logo.png" alt="logo">
            </a>
        </div>
        <ul class="navbar">

            <li  class="pad"><a href="<?= Url::to(['/site/index'])?>">Главная</a></li>
            <li>
                <a href="<?= Url::to(['/pages/default/index', 'page'=>'about-us'])?>">о компании</a>
            </li>
            <li>
                <a href="<?= Url::to(['/pages/default/index', 'page'=>'how-to'])?>">как пользоваться сайтом</a>
            </li>
            <li>
                <a href="<?= Url::to(['/pages/default/index', 'page'=>'faq'])?>">часто задаваемые вопросы</a>
            </li>
            <li>
                <a href="<?= Url::to(['/site/contacts'])?>">контакты</a>
            </li>
            <li>
                <a href="<?= Url::to(['news/index'])?>">новости</a>
            </li>
            <li>
                <a href="<?= Url::to(['article/index'])?>">статьи</a>
            </li>
        </ul>
        <a class="button-faq" data-fancybox data-caption="Как пользоваться сайтом" href="https://youtu.be/OD77h1XuLR8">
            <img src="/img/icon/faq.png" alt="">Как заказать наклеки?
        </a>
        <div class="faqq">

        </div>
        <div class="cart">
            <img src="/img/icon/cart_03.png" alt="" class="cartimg">
            <span>3</span>
            <div class="popup-item-blockk">
                <h4>В Корзине:</h4>
                <div class="popup-item">
                    <div class="for-img">
                        <img src="/img/tatu/1.png" class="imgvsp" alt="">
                    </div>
                    <div class="for-text">
                        <h4>Полиезия и маори</h4><br>
                        <p>Их наносили только <br>мужчины и только по</p>
                    </div>
                    <div class="clossse">
                        <img src="/img/icon/close.png" alt="" class="closee">
                        <div class="helping">Удалить из корзины</div>
                    </div>
                </div>
                <div class="popup-item">
                    <div class="for-img">
                        <img src="/img/tatu/1.png" class="imgvsp" alt="">
                    </div>
                    <div class="for-text">
                        <h4>Полиезия и маори</h4><br>
                        <p>Их наносили только <br>мужчины и только по</p>
                    </div>
                    <div class="clossse">
                        <img src="/img/icon/close.png" alt="" class="closee">
                        <div class="helping">Удалить из корзины</div>
                    </div>
                </div>
                <div class="popup-item">
                    <div class="for-img">
                        <img src="/img/tatu/1.png" class="imgvsp" alt="">
                    </div>
                    <div class="for-text">
                        <h4>Полиезия и маори</h4><br>
                        <p>Их наносили только <br>мужчины и только по</p>
                    </div>
                    <div class="clossse">
                        <img src="/img/icon/close.png" alt="" class="closee">
                        <div class="helping">Удалить из корзины</div>
                    </div>
                </div>
                <div class="clssee">Закрыть</div>
            </div>
        </div>
        <div class="mobile nav">
            <a class="burger" id="open" onclick="openNav()">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </a>
            <div class="div">
                <ul id="nav" class="nav">
                    <li class="close">
                        <a href="#" onclick="closeNav()">✕</a>
                    </li>
                    <li>
                        <a href="#" class="active">Главная</a>
                    </li>
                    <li>
                        <a href="#">о компании</a>
                    </li>
                    <li>
                        <a href="#">как пользоваться сайтом</a>
                    </li>
                    <li>
                        <a href="#">часто задаваемые вопросы</a>
                    </li>
                    <li>
                        <a href="#">конатакты</a>
                    </li>
                    <li>
                        <a href="#">новости</a>
                    </li>
                    <li>
                        <a href="#">статьи</a>
                    </li>
                    <li>
                        <a class="button-faq" data-fancybox data-caption="Как пользоваться сайтом" href="https://youtu.be/OD77h1XuLR8">
                            <img src="/img/icon/faq.png" alt="">Как заказать наклеки?
                        </a>
                    </li>
                </ul>
                <div class="divcl">
                    <div class="cartt">
                        <div class="vnut">
                            <a href="#">EN</a> |
                            <a  href="#">RU</a>
                        </div>
                    </div>
                    <div class="socseti">
                        <a href="https://www.instagram.com/">
                            <img  src="/img/icon/instagram.png" alt="" class="cosseti">
                        </a>
                        <a href="https://www.facebook.com/">
                            <img src="/img/icon/facebook.png" alt="" class="cosseti">
                        </a>
                    </div>
                    <div class="cart">
                        <img src="/img/icon/cart_03.png" alt="">
                        <span>3</span>
                        <div class="popup-item-blockk">
                            <h4>В Корзине:</h4>
                            <div class="popup-item">
                                <div class="for-img">
                                    <img src="/img/tatu/1.png" class="imgvsp" alt="">
                                </div>
                                <div class="for-text">
                                    <h4>Полиезия и маори</h4><br>
                                    <p>Их наносили только <br>мужчины и только по</p>
                                </div>
                                <div class="clossse">
                                    <img src="/img/icon/close.png" alt="" class="closee">
                                    <div class="helping">Удалить из корзины</div>
                                </div>
                            </div>
                            <div class="popup-item">
                                <div class="for-img">
                                    <img src="/img/tatu/1.png" class="imgvsp" alt="">
                                </div>
                                <div class="for-text">
                                    <h4>Полиезия и маори</h4><br>
                                    <p>Их наносили только <br>мужчины и только по</p>
                                </div>
                                <div class="clossse">
                                    <img src="/img/icon/close.png" alt="" class="closee">
                                    <div class="helping">Удалить из корзины</div>
                                </div>
                            </div>
                            <div class="popup-item">
                                <div class="for-img">
                                    <img src="/img/tatu/1.png" class="imgvsp" alt="">
                                </div>
                                <div class="for-text">
                                    <h4>Полиезия и маори</h4><br>
                                    <p>Их наносили только <br>мужчины и только по</p>
                                </div>
                                <div class="clossse">
                                    <img src="/img/icon/close.png" alt="" class="closee">
                                    <div class="helping">Удалить из корзины</div>
                                </div>
                            </div>
                            <div class="clssee">Закрыть</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>