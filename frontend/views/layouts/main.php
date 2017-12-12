<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use \frontend\widgets\LanguageSelector;
use \frontend\widgets\SearchMain;
use \frontend\widgets\BannerMain;
use \frontend\widgets\RegistrationPopup;

//AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#760532">
    <meta name="msapplication-navbutton-color" content="#760532">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/Dima-style.css">
    <link rel="stylesheet" href="/css/dvizh-styles.css">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css">

    <?= Html::csrfMetaTags() ?>

    <!--[if lt IE 10]>
    <meta http-equiv="refresh" content="0;url=http://verstka.integratic.ru/tatu-2/pagebrowser.html"/>
    <![endif]-->
    <noscript>
        <meta http-equiv="refresh" content="0;url=http://verstka.integratic.ru/tatu-2/pagebrowser.html"/>
    </noscript>

    <title><?= Html::encode($this->title) ?></title>




    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<div class="wrapper loading">
    <!-- header -->
    <?= $this->render('_header'); ?>

    <?= SearchMain::widget(); ?>

    <div class="content">

        <!-- Registration popup -->
        <?= RegistrationPopup::widget(); ?>

        <div class="t-container">
            <div class="row">
                <div class="col-2">
                    <div class="checkbox-left">

                        <?= \frontend\widgets\Breadcrumbs::widget(); ?>

                        <?= \frontend\widgets\LeftMenu::widget(); ?>

                    </div>
                </div>
                <div class="col-8 photo-grid mlr">
                    <div class="paddingbox">

                        <?= Alert::widget() ?>


                        <?= $content ?>


                    </div>
                </div>
                <div class="col-2">

                    <?= \frontend\widgets\RightColumn::widget(); ?>

                </div>
            </div>


        </div>
        <?= $this->render('_popups') ?>
        <?= $this->render('_footer') ?>
    </div>




</div>
<div id="loader"></div>

<!-- JavaScript-->


<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.fancybox.min.js"></script>
<script src="/js/script.js"></script>
<script src="/js/filter.js"></script>
<script src="/js/dvizh-scripts.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
