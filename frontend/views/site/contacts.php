<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="left">
    <div class="e-mail block_contact">
        <div class="emaildiv h3">EMAIL:</div>
        <a href="mailto:4545600@mail.ru" target="_top">4545600@mail.ru</a>

    </div>
    <div class="location block_contact">
        <div class="locationdiv h3">адрес
        </div>
        <p>125993, Москва</p>

        <p>Волоконское шоссе, 7 </p>
    </div>
    <div class="phone block_contact">
        <div class="phonediv h3"> телефон</div>
        <div class="number">(495)567 89 75</div>
        <div class="number">(495)567 89 04</div>
    </div>
</div>

<div class="right">
    <div class="forma_obratnoy_svyzi">
        <div class="topzagolovok">ОБРАТНАЯ СВЯЗЬ</div>

        <input type="text" placeholder="Ваше имя" class="persona">
        <input type="text" placeholder="Ваш Email" class="email">
        <textarea name="textareaf" placeholder="Ваше сообщение"></textarea>

        <div class="formabutton"><a href="#">ОТПРАВИТЬ</a></div>

    </div>
</div>



