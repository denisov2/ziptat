<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Label;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\Label */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('common', 'Labels');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="label-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('common', 'Create Label'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\ActionColumn'],
            [
                'label' => Yii::t('common', 'Image types'),
                'format' => 'html',
                'value' => function ($model) {
                    /* @var \common\models\Label $model */
                    $img = Html::img( Yii::$app->urlManagerFrontend->baseUrl .$model->image_original , [
                        'width' => '100px'
                    ]);
                    $link = Html::a(Yii::t('common' , 'Generate images'), ['label/generate', 'id'=> $model->id]);

                    return "<p>$img</p><p>$link</p>";
                },

            ],


                [
                'label' => Yii::t('common', 'Image types'),
                'format' => 'html',
                'value' => function ($model) {
                    /* @var \common\models\Label $model */
                    $content = "";

                    if(!empty($model->image_original)){



                        if($model->isImageExist(Label::THUMBNAIL_FOLDER)) {
                            $content.=Html::img($model->getImageUrl(Label::THUMBNAIL_FOLDER), $options = ['class' => '', 'style' => ['width' => '50px', 'float' => 'left']]);
                            $content.= Yii::t('common' , 'Thumbnail image');
                            $content.=$model->getImageInfo(Label::THUMBNAIL_FOLDER);
                            $content.="<br clear='all'>";

                        }

                        if($model->isImageExist(Label::MIDDLE_FOLDER)) {
                            $content.=Html::img($model->getImageUrl(Label::MIDDLE_FOLDER), $options = ['class' => '', 'style' => ['width' => '50px', 'float' => 'left']]);
                            $content.=Yii::t('common' , 'Middle image');
                            $content.=$model->getImageInfo(Label::MIDDLE_FOLDER);
                            $content.="<br clear='all'>";

                        }


                        if($model->isImageExist(Label::BIG_FOLDER)) {
                            $content.=Html::img($model->getImageUrl(Label::BIG_FOLDER), $options = ['class' => '', 'style' => ['width' => '50px', 'float' => 'left']]);
                            $content.=Yii::t('common' , 'Big image');
                            $content.=$model->getImageInfo(Label::BIG_FOLDER);
                            $content.="<br clear='all'>";

                        }


                        if($model->isImageExist()) {
                            $content.=Html::img($model->getImageUrl(), $options = ['class' => '', 'style' => ['width' => '50px'], 'float' => 'left']);
                            $content.=Yii::t('common' , 'Original image');
                            $content.=$model->getImageInfo();

                        }
                    }
                    return $content;
                },

            ],

            'id',
            'name_en',
            'name_ru',

            'slug',
            'subcategory_id',

            // 'description_en:ntext',
            // 'description_ru:ntext',
            // 'active',
            // 'status',
            // 'likes',
            // 'image_original',
            // 'created_at',
            // 'updated_at',


        ],
    ]); ?>
</div>
