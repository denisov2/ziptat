<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use \yii\helpers\Url;
use kartik\widgets\FileInput;
use common\models\Label;
use common\models\Subcategory;
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
            <?=

           // $form->field($model, 'subcategory_id')->textInput();

            $form->field($model, 'subcategory_id')->dropDownList(Subcategory::getItemsAsArray(), ['promt'=> Yii::t('common', 'Select category')]);
            ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'active')->checkbox() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'status')->dropDownList(Label::getStatusesAsArray(), ['promt' => Yii::t('common', 'Select labels status')]) ?>
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

            <?= $form->field($model, 'file_image')->widget(FileInput::classname(), [
                'options' => ['accept' => 'image/*'],
                'pluginOptions' => [
                    'showPreview' => true,
                    'showCaption' => true,
                    'showRemove' => true,
                    'showUpload' => false
                ]
            ]); ?>


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
            } ?>





        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('common', 'Create') : Yii::t('common', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
