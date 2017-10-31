<?php
/**
 * Created by PhpStorm.
 * User: denisov
 * Date: 27.09.2017
 * Time: 10:51
 */

namespace frontend\widgets;

use yii\base\Widget;

class FeedBackForm extends Widget
{
    public function run()
    {
        ob_start(); ?>

        <div class="forma_obratnoy_svyzi">
            <div class="topzagolovok">ОБРАТНАЯ СВЯЗЬ</div>
            <input type="text" placeholder="Ваше имя" class="persona">
            <input type="text" placeholder="Ваш Email" class="email">
            <textarea name="textareaf"  placeholder="Ваше сообщение"></textarea>
            <div class="formabutton">
                <a href="#" >ОТПРАВИТЬ</a>
            </div>
        </div>

        <?php
        return ob_get_clean();;
    }
}