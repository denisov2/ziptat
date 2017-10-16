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

?>
<div class="label-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= Yii::$app->session->getFlash('generating_images') ?
        Alert::widget([
            'options' => ['class' => 'alert-success'],
            'body' => Yii::$app->session->getFlash('generating_images')
        ]) : "" ?>

    <p>
        <?= Html::a(Yii::t('common', 'Generate images'), ['generate', 'id' => $model->id], [
            'class' => 'btn btn-primary',
            'data' => [
                'confirm' => Yii::t('common', 'Are you sure you want to regenerate images?'),
                'method' => 'post',
            ]
        ]) ?>
        <?php
            /*
            Html::a(Yii::t('common', 'Delete images'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('common', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ])
            */?>
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
            <th><?= Yii::t('common', 'Generated images') ?></th>
            <td>
                <?php

                if(!empty($model->image_original)){

                    if($model->isImageExist(Label::THUMBNAIL_FOLDER)) {
                        echo "<h4>".Yii::t('common' , 'Thumbnail image')."</h4>";
                        echo $model->getImageInfo(Label::THUMBNAIL_FOLDER);
                        echo Html::img($model->getImageUrl(Label::THUMBNAIL_FOLDER), $options = ['class' => '', 'style' => ['max-width' => '900px']]);
                    }

                    if($model->isImageExist(Label::MIDDLE_FOLDER)) {
                        echo "<h4>".Yii::t('common' , 'Middle image')."</h4>";
                        echo $model->getImageInfo(Label::MIDDLE_FOLDER);
                        echo Html::img($model->getImageUrl(Label::MIDDLE_FOLDER), $options = ['class' => '', 'style' => ['max-width' => '900x']]);
                    }



                    if($model->isImageExist(Label::BIG_FOLDER)) {
                        echo "<h4>".Yii::t('common' , 'Big image')."</h4>";
                        echo $model->getImageInfo(Label::BIG_FOLDER);
                        echo Html::img($model->getImageUrl(Label::BIG_FOLDER), $options = ['class' => '', 'style' => ['max-width' => '900px']]);
                    }


                    if($model->isImageExist()) {

                        echo "<h4>".Yii::t('common' , 'Original image')."</h4>";
                        echo $model->getImageInfo();
                        echo Html::img($model->getImageUrl(), $options = ['class' => '', 'style' => ['max-width' => '900px']]);
                    }
                }

                ?>

            </td>
        </tr>


        </tbody>
    </table>

</div>
