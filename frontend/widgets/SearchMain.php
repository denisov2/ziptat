<?php
/**
 * Created by PhpStorm.
 * User: denisov
 * Date: 27.09.2017
 * Time: 10:51
 */

namespace frontend\widgets;

use yii\base\Widget;

class SearchMain extends Widget
{
    public function run()
    {
        ob_start(); ?>

        <!-- search -->
        <div class="t-containere">
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
                    <div class="search-block-fuul">
                        <input type="text" class="searchblock" id="kek2" placeholder="Введите ключевое слово">
                    </div>
                    <!-- right -->
                </div>
            </div>
        </div>

        <?php
        return ob_get_clean();;
    }
}