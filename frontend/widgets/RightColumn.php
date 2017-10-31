<?php
/**
 * Created by PhpStorm.
 * User: denisov
 * Date: 27.09.2017
 * Time: 10:51
 */

namespace frontend\widgets;

use yii\base\Widget;

class RightColumn extends Widget
{
    public function run()
    {
        ob_start(); ?>

        <div class="recomended">
            <div class="head_title">Рекомендованные</div>
            <div class="right-grid paddi">
                <div class="right-item item">
                    <img data-src="/img/akl/Middle/1.png" src="/img/tatu/1.png" class="uvl" alt="">
                    <button class="save">Сохранить</button>
                    <button class="like">
                        <img src="/img/icon/like.png" alt="">
                    </button>
                    <div class="show">
                        <div class="figure">
                            <h3>Полинезия и маори в несколько строчек</h3>
                            <button class="liked">
                                <img src="/img/icon/like.png" alt="">12
                            </button>
                            <p>Их наносили только мужчины и только по конкретному поводу Их наносили только мужчины и только по конкретному поводу Их наносили только мужчины и только по конкретному поводу</p>
                            <div style="text-align: center;">
                                <button class="choose">Выбрать</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-item item">
                    <img data-src="/img/akl/Middle/2.png" src="/img/tatu/2.png" class="uvl" alt="">
                    <button class="save">Сохранить</button>
                    <button class="like">
                        <img src="/img/icon/like.png" alt="">
                    </button>
                    <div class="show">
                        <div class="figure">
                            <h3>Полинезия и маори в несколько строчек</h3>
                            <button class="liked">
                                <img src="/img/icon/like.png" alt="">12
                            </button>
                            <p>Их наносили только мужчины и только по конкретному поводу Их наносили только мужчины и только по конкретному поводу Их наносили только мужчины и только по конкретному поводу</p>
                            <div style="text-align: center;">
                                <button class="choose">Выбрать</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-item item">
                    <img data-src="/img/akl/Middle/3.png" src="/img/tatu/3.png" class="uvl" alt="">
                    <button class="save">Сохранить</button>
                    <button class="like">
                        <img src="/img/icon/like.png" alt="">
                    </button>
                    <div class="show">
                        <div class="figure">
                            <h3>Полинезия и маори в несколько строчек</h3>
                            <button class="liked">
                                <img src="/img/icon/like.png" alt="">12
                            </button>
                            <p>Их наносили только мужчины и только по конкретному поводу Их наносили только мужчины и только по конкретному поводу Их наносили только мужчины и только по конкретному поводу</p>
                            <div style="text-align: center;">
                                <button class="choose">Выбрать</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-item item">
                    <img data-src="/img/akl/Middle/4.png" src="/img/tatu/4.png" class="uvl" alt="">
                    <button class="save">Сохранить</button>
                    <button class="like">
                        <img src="/img/icon/like.png" alt="">
                    </button>
                    <div class="show">
                        <div class="figure">
                            <h3>Полинезия и маори в несколько строчек</h3>
                            <button class="liked">
                                <img src="/img/icon/like.png" alt="">12
                            </button>
                            <p>Их наносили только мужчины и только по конкретному поводу Их наносили только мужчины и только по конкретному поводу Их наносили только мужчины и только по конкретному поводу</p>
                            <div style="text-align: center;">
                                <button class="choose">Выбрать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="show-more">
                <a href="http://verstka.integratic.ru/tatu-2/#">Показать все рекомендованные наклеки
                    <img src="/img/icon/arrow-down.png" alt="down">
                </a>
            </div>
        </div>

        <?php
        return ob_get_clean();;
    }
}