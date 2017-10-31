<?php
/**
 * Created by PhpStorm.
 * User: denisov
 * Date: 27.09.2017
 * Time: 10:51
 */

namespace frontend\widgets;

use yii\base\Widget;

class BannerMain extends Widget
{
    public function run()
    {
        ob_start(); ?>

        <!-- inner background image-->
        <div class="background-img">
            <div class="container">

            </div>
            <div class="background-inner">
                <h1>ЖЕНСКИЕ наклейки</h1>

                <p>Женские наклейки позволяют выделить девушку из толпы, подчеркнуть ее женственность, обаяние, красоту
                    отдельных частей ее тела</p>
            </div>
        </div>

        <?php
        return ob_get_clean();;
    }
}