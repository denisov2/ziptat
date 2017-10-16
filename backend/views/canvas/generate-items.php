<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use tpmanc\imagick\Imagick;

/* @var $this yii\web\View */
/* @var $model common\models\Canvas */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Canvas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$json_string = $model->json;

$json = json_decode($json_string);


$labels = $json->labels;

/* Создаём пустой холст */
$canvas = new \Imagick();

/* Холст должен быть достаточно большой, чтобы вместить оба изображения */
$width = 1024;
$height = 768;
$canvas->newImage($width, $height, new ImagickPixel("white"));
$canvas->setImageFormat("png");

foreach($labels as $label) {



    $label_url = "/labels/". \common\models\Label::BIG_FOLDER . '/' . $label->url;
    $big_image_path = Yii::getAlias("@labels/".\common\models\Label::BIG_FOLDER."/{$label->url}");



    /* Чтение изображения */
    $im = new \Imagick();
    $im->readImage($big_image_path);
    $im->resizeImage($label->width,$label->width, \Imagick::FILTER_LANCZOS , 1);





    /* Наложение оригинального изображения и отражения на холст */
    $canvas->compositeImage($im, \Imagick::COMPOSITE_OVER, $label->top, $label->left);


}


/* Вывод изображения */
// header("Content-Type: image/png");
$filename = time().'.png';
$path = Yii::getAlias("@canvases/").$filename ;
$canvas->writeImage($path);
$url = "/canvases/$filename";

echo Html::img($url);



?>
<div class="canvas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('common', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('common', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('common', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'order_id',
            'type',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
