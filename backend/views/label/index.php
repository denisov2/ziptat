<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
                    $link = Html::a(Yii::t('common' , 'Image types'), ['label/types', 'id'=> $model->id]);

                    return "<p>$img</p><p>$link</p>";
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
