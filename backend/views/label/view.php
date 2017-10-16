<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Label;
use common\models\Subcategory;
use common\models\Category;
/* @var $this yii\web\View */
/* @var $model common\models\Label */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Labels'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="label-view">

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
            'name_en',
            'name_ru',
            [
                'label'  => Yii::t('common' , 'Subcategory'),
                'value'  => call_user_func(function ($model) {
                    return Subcategory::findOne($model->subcategory_id)->{"name_".Yii::$app->language};
                }, $model),
            ],
            [
                'label'  => Yii::t('common' , 'Category'),
                'value'  => call_user_func(function ($model) {
                    $subcategory = Subcategory::findOne($model->subcategory_id);

                    return Category::findOne($subcategory->category_id)->{"name_".Yii::$app->language};
                }, $model),
            ],

            'slug',
            'subcategory_id',
            'description_en:ntext',
            'description_ru:ntext',
            'active',
            'status',
            'likes',

        ],
    ]) ?>

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

</div>
