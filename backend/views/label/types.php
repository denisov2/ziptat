<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Alert;
use tpmanc\imagick\Imagick;
use common\models\Label;

/* @var $this yii\web\View */
/* @var $model common\models\Label */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Labels'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$original_image_path = Yii::getAlias("@labels/".Label::ORIGINAL_FOLDER."/{$model->image_original}");
$big_image_path = Yii::getAlias("@labels/".Label::BIG_FOLDER."/{$model->image_original}");
$middle_image_path = Yii::getAlias("@labels/".Label::MIDDLE_FOLDER."/{$model->image_original}");
$thumbnail_image_path = Yii::getAlias("@labels/".Label::THUMBNAIL_FOLDER."/{$model->image_original}");

$big_image = null;
$middle_image = null;
$thumbnail_image = null;

if(file_exists($original_image_path)) {

    $imagick = Imagick::open($original_image_path);
    $imagick->resize(Label::BIG_WIDTH, false)->saveTo($big_image_path);
    $big_image = file_exists($big_image_path);

    $imagick = Imagick::open($original_image_path);
    $imagick->resize(Label::MIDDLE_WIDTH, false)->saveTo($middle_image_path);
    $middle_image = file_exists($middle_image_path);


    $imagick = Imagick::open($original_image_path);
    $imagick->resize(Label::THUMBNAIL_WIDTH, false)->saveTo($thumbnail_image_path);
    $thumbnail_image = file_exists($thumbnail_image_path);
}

?>
<div class="label-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= Yii::$app->session->getFlash('generating_images') ?
        Alert::widget([
            'options' => ['class' => 'alert-success'],
            'body' => Yii::$app->session->getFlash('generating_images')
        ]) : "" ?>

    <p>
        <?= Html::a(Yii::t('common', 'Generate images'), ['types', 'id' => $model->id], [
            'class' => 'btn btn-primary',
            'data' => [
                'confirm' => Yii::t('common', 'Are you sure you want to genrate images?'),
                'method' => 'post',
            ]
        ]) ?>
        <?= Html::a(Yii::t('common', 'Delete images'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('common', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <table id="w0" class="table table-striped table-bordered detail-view">
        <tbody>
        <tr>
            <th>ID</th>
            <td>1</td>
        </tr>
        <tr>
            <th>Name En</th>
            <td>Rose</td>
        </tr>
        <tr>
            <th>Name Ru</th>
            <td>Роза</td>
        </tr>
        <tr>
            <th><?= Yii::t('common', 'Image Original') ?></th>
            <td><?= Html::img($model->image_original) ?></td>
        </tr>
        <tr>
            <th><?= Yii::t('common', 'Image Big') ?></th>
            <td><?= Html::img($model->image_original) ?></td>
        </tr>
        <tr>
            <th><?= Yii::t('common', 'Image Middle') ?></th>
            <td><?= Html::img($model->image_original) ?></td>
        </tr>
        <tr>
            <th><?= Yii::t('common', 'Image Thumbnail') ?></th>
            <td><?= Html::img($model->image_original) ?></td>
        </tr>

        </tbody>
    </table>

</div>
