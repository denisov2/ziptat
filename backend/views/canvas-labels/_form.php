<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CanvasLabels */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="canvas-labels-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'canvas_id')->textInput() ?>

    <?= $form->field($model, 'label_id')->textInput() ?>

    <?= $form->field($model, 'top')->textInput() ?>

    <?= $form->field($model, 'left')->textInput() ?>

    <?= $form->field($model, 'width')->textInput() ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'rotate')->textInput() ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('common', 'Create') : Yii::t('common', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
