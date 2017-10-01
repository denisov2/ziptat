<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Label */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="label-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_en') ?>

    <?= $form->field($model, 'name_ru') ?>

    <?= $form->field($model, 'slug') ?>

    <?= $form->field($model, 'subcategory_id') ?>

    <?php // echo $form->field($model, 'description_en') ?>

    <?php // echo $form->field($model, 'description_ru') ?>

    <?php // echo $form->field($model, 'active') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'likes') ?>

    <?php // echo $form->field($model, 'image_original') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('common', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('common', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
