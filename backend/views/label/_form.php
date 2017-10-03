<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use \yii\helpers\Url;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Label */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="label-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'subcategory_id')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'active')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'status')->textInput() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">

            <h3><?= Yii::t('common', 'English version'); ?></h3>

            <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description_en')->widget(Widget::className(), [
                'settings' => [
                    'lang' => 'ru',
                    'minHeight' => 200,
                    'imageUpload' => \yii\helpers\Url::to(['/site/image-upload']),
                    'fileUpload' => Url::to(['/site/file-upload']),
                    'plugins' => ['fullscreen',]
                ]
            ]) ?>

        </div>
        <div class="col-md-6">

            <h3><?= Yii::t('common', 'Russian version'); ?></h3>

            <?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description_ru')->widget(Widget::className(), [
                'settings' => [
                    'lang' => 'ru',
                    'minHeight' => 200,
                    'imageUpload' => Url::to(['/site/image-upload']),
                    'fileUpload' => Url::to(['/site/file-upload']),
                    'plugins' => ['fullscreen',]
                ]
            ]) ?>

        </div>
    </div>

    <div class="row">
        <div class="col-md-6">

            <?php

            if(!empty($model->image_original)){
                echo Html::img($model->image_original, $options = ['class' => '', 'style' => ['max-width'=>'100%']]);
            } ?>



            <?= $form->field($model, 'file_image')->widget(FileInput::classname(), [
                'options' => ['accept' => 'image/*'],
                'pluginOptions' => [
                    'showPreview' => true,
                    'showCaption' => true,
                    'showRemove' => true,
                    'showUpload' => false
                ]
            ]); ?>

        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('common', 'Create') : Yii::t('common', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
