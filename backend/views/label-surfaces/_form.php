<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LabelSurfaces */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="label-surfaces-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'label_id')->textInput() ?>

    <?= $form->field($model, 'surface_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('common', 'Create') : Yii::t('common', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
