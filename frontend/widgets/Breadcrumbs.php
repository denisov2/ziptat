<?php
/**
 * Created by PhpStorm.
 * User: denisov
 * Date: 27.09.2017
 * Time: 10:51
 */

namespace frontend\widgets;

use yii\base\Widget;

class Breadcrumbs extends Widget
{
    public function run()
    {
        ob_start(); ?>

        <div class="breadcrumb">
            <a href="#">Главная</a><span class="center"> : : </span> <span class="current">Категория</span>
        </div>

        <?php
        return ob_get_clean();;
    }
}