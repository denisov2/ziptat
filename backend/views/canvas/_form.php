<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Order;
use common\models\Canvas;
/* @var $this yii\web\View */
/* @var $model common\models\Canvas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="canvas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_id')->dropDownList(Order::getOrdersAsArray(), ['promt' => Yii::t('common', 'Select order')]) ?>

    <?= $form->field($model, 'type')->dropDownList(Canvas::getTypes(), ['promt' => Yii::t('common', 'Select canvas type')]) ?>

    <?= $form->field($model, 'json')->textarea(['rows' => '20']) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('common', 'Create') : Yii::t('common', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
