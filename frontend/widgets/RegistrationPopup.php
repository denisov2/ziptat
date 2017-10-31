<?php
/**
 * Created by PhpStorm.
 * User: denisov
 * Date: 27.09.2017
 * Time: 10:51
 */

namespace frontend\widgets;

use yii\base\Widget;

class RegistrationPopup extends Widget
{
    public function run()
    {
        ob_start(); ?>

        <div class="po-pap">
            <div class="popap-block">
                <div class="save-block">
                    <p class="text-sc">Войдите в систему или зарегистрируйтесь, что бы вы могли выполнить дальнейшие действия</p>
                    <div class="dis-play">
                        <div class="vhod-par2">
                            <p class="text-2">Вход</p>
                            <input type="text" placeholder="Ваш логин или Email" class="inp-2 in-1r">
                            <input type="password" placeholder="Ваш пaроль" class="inp-2 in-2r">
                            <p class="kod-2 b">Введите код с картинки</p>
                            <div>
                                <img class="img-2" src="/img/icon/kod.png" alt="">
                                <input class="form-2 tu" type="text">
                            </div>
                            <button class="but-1">Войти</button>
                            <a href="#" class="s-1">Забыли пароль?</a>
                            <div class="div-1">
                                <span class="spa-1">Войти помощью</span>
                                <a href="www.facebook.com" target="_blank">
                                    <img src="/img/icon/facebook1.png" alt="">
                                </a>
                                <a href="www.instagram.com" target="_blank">
                                    <img src="/img/icon/instagram1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="reg-par2">
                            <p class="text-2">Регистрация</p>
                            <input type="text" placeholder="Ваш логин" class="inp-2 in-3r">
                            <input type="text" placeholder="Ваш Email" class="inp-2 in-4r">
                            <input type="password" placeholder="Ваш пaроль" class="inp-2 in-5r">
                            <input type="password" placeholder="Повторите пaроль" class="inp-2 in-6r">
                            <p class="kod-2">Введите код с картинки</p>
                            <div>
                                <img class="img-2" src="/img/icon/kod.png" alt="">
                                <input class="form-2" type="text">
                            </div>
                            <button class="but-2">Зарегистрироваться</button>
                            <a href="#" class="s-1">Забыли пароль?</a>
                            <div class="div-2">
                                <span class="spa-1">Зарегистрироваться с помощью </span>
                                <a href="www.facebook.com" target="_blank">
                                    <img src="/img/icon/facebook1.png" alt="">
                                </a>
                                <a href="www.instagram.com" target="_blank">
                                    <img src="/img/icon/instagram1.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="/img/icon/closse.png" class="closes-2" alt="">
                </div>
            </div>
            <div class="popap-block-2">
                <div class="kot">
                    <div class="clcc">
                        <a href="#" class="login1">Войдите</a> или <a href="#" class="regist1">зарегистрируйтесь</a>
                    </div>
                    <div class="flexx">
                        <button class="pop-1">Вход</button>
                        <button class="pop-2">Регистрация</button>
                    </div>
                    <span class="exit-3">+</span>
                </div>
            </div>
        </div>

        <div class="top-win3">
            <div class="vhod-par2-two">
                <span class="closes-popup save-popup-closse">+</span>
                <p class="top-pic" ><a class="ss-3 a" href="#">Вход</a><a  class="ss-4 b" href="#" ">Регистрация</a></p>
                <input type="text" placeholder="Ваш логин или Email" class="inp-2 in-1r">
                <input type="password" placeholder="Ваш пaроль" class="inp-2 in-2r">
                <p class="kod-2 b">Введите код с картинки</p>
                <div>
                    <img class="img-2" src="/img/icon/kod.png" alt="">
                    <input class="form-2 tu" type="text">
                </div>
                <button class="but-1">Войти</button>
                <a href="#" class="s-1">Забыли пароль?</a>
                <div class="div-1">
                    <span class="spa-1">Войти помощью</span>
                    <a href="www.facebook.com" target="_blank">
                        <img src="/img/icon/facebook1.png" alt="">
                    </a>
                    <a href="www.instagram.com" target="_blank">
                        <img src="/img/icon/instagram1.png" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div class="top-win4">
            <div class="reg-par2-two">
                <span class="closes-popup save-popup-closse">+</span>
                <p class="top-pic" ><a class="ss-3 dd" href="#">Вход</a><a class="ss-4 ww" href="#">Регистрация</a></p>
                <input type="text" placeholder="Ваш логин" class="inp-2 in-3r">
                <input type="text" placeholder="Ваш Email" class="inp-2 in-4r">
                <input type="password" placeholder="Ваш пaроль" class="inp-2 in-5r">
                <input type="password" placeholder="Повторите пaроль" class="inp-2 in-6r">
                <p class="kod-2">Введите код с картинки</p>
                <div>
                    <img class="img-2" src="/img/icon/kod.png" alt="">
                    <input class="form-2" type="text">
                </div>
                <button class="but-2 par-0">Зарегистрироваться</button>
                <a href="#" class="s-1">Забыли пароль?</a>
                <div class="div-2">
                    <span class="spa-1">Зарегистрироваться с помощью </span>
                    <a href="www.facebook.com" target="_blank">
                        <img src="/img/icon/facebook1.png" alt="">
                    </a>
                    <a href="www.instagram.com" target="_blank">
                        <img src="/img/icon/instagram1.png" alt="">
                    </a>
                </div>
            </div>
        </div>

        <?php
        return ob_get_clean();;
    }
}