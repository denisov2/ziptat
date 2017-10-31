<?php
/**
 * Created by PhpStorm.
 * User: denisov
 * Date: 16.10.2017
 * Time: 17:43
 */

use common\models\Subcategory;
use common\models\Label;

/* @var $this yii\web\View */
/* @var $lang string */
/* @var $labels Label[] */

$this->title = Yii::t('common' , 'Search results: ') . $title;
?>

<div class="head_title">
    <span class="s"></span>
    <span class="sw"></span>
    <span class="sq"></span>
    <span class="se"></span>
    <h2><?= $this->title ?> </h2>
</div>

<div class="grid">

    <?php foreach($labels as $label) { ?>


    <div class="item">
         <img data-src="<?=  $label->getImageUrl(Label::MIDDLE_FOLDER) ?> " src="<?= $label->getImageUrl(Label::THUMBNAIL_FOLDER) ?> " alt="" class="uvl">
        <?php //\yii\helpers\Html::img($label->getImageUrl(Label::MIDDLE_FOLDER), $options = ['class' => '', 'style' => ['max-width' => '540px']]); ?>
        <button class="save">Сохранить</button>
        <button class="like">
            <img src="/img/icon/like.png" alt="">
        </button>
        <div class="show">
            <div class="figure">
                <h3><?= $label->{"name_$lang"} ?></h3>
                <button class="liked">
                    <img src="/img/icon/like.png" alt="">12</button>
                <p><?= $label->{"description_$lang"} ?></p>
                <div style="text-align: center;">
                    <button class="choose">Выбрать</button>
                </div>
            </div>
        </div>
    </div>
    <? } ?>









</div>
