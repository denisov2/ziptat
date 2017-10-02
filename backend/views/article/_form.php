<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use \yii\helpers\Url;
use kartik\widgets\FileInput;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Article */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">

        <div class="col-md-3">
            <?= $form->field($model, 'date')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Enter birth date ...'],

                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-dd-mm'
                ]
            ]); ?>

        </div>

        <div class="col-md-2 col-md-offset-1">
            <?= $form->field($model, 'active')->checkbox() ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
        </div>


    </div>

    <div class="row">
        <div class="col-md-6">

            <h3><?= Yii::t('common', 'English version'); ?></h3>

            <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description_en')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'text_en')->widget(Widget::className(), [
                'settings' => [
                    'lang' => 'ru',
                    'minHeight' => 200,
                    'imageUpload' => Url::to(['/site/image-upload']),
                    'fileUpload' => Url::to(['/site/file-upload']),
                    'plugins' => ['fullscreen',]
                ]
            ]) ?>

            <?php

            if(!empty($model->image_en)){
                echo Html::img($model->image_en, $options = ['class' => '', 'style' => ['max-width'=>'100%']]);
            } ?>

            <?= $form->field($model, 'file_image_en')->widget(FileInput::classname(), [
                'options' => ['accept' => 'image/*'],
                'pluginOptions' => [
                    'showPreview' => true,
                    'showCaption' => true,
                    'showRemove' => true,
                    'showUpload' => false
                ]
            ]);?>

        </div>

        <div class="col-md-6">

            <h3><?= Yii::t('common', 'Russian version'); ?></h3>

            <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description_ru')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'text_ru')->widget(Widget::className(), [
                'settings' => [
                    'lang' => 'ru',
                    'minHeight' => 200,
                    'imageUpload' => Url::to(['/site/image-upload']),
                    'fileUpload' => Url::to(['/site/file-upload']),
                    'plugins' => ['fullscreen',]
                ]
            ]) ?>

            <?php if(!empty($model->image_ru)){
                echo Html::img($model->image_ru, $options = ['class' => '', 'style' => ['max-width'=>'100%']]);
            } ?>

            <?= $form->field($model, 'file_image_ru')->widget(FileInput::classname(), [
                'options' => ['accept' => 'image/*'],
                'pluginOptions' => [
                    'showPreview' => true,
                    'showCaption' => true,
                    'showRemove' => true,
                    'showUpload' => false
                ]
            ]);?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('common', 'Create') : Yii::t('common', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
