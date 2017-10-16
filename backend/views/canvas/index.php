<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CanvasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('common', 'Canvas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="canvas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('common', 'Create Canvas'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\ActionColumn'],

            'id',
            [
                'label' => Yii::t('common', 'Links'),
                'format' => 'html',
                'value' => function ($model) {
                    /* @var \common\models\Canvas $model */


                    return Html::a(Yii::t('common', 'Generate items from JSON'), \yii\helpers\Url::to(['generate-items', 'id'=>$model->id]));



                },

                'filter' => \common\models\Order::getOrdersAsArray()

            ],
            [
                'label' => Yii::t('common', 'Order'),
                'attribute' => 'order_id',

                'value' => function ($model) {
                    /* @var \common\models\Canvas $model */


                    /* @var \common\models\Order $order */
                    $order = $model->getOrder()->one();
                    return "#". $order->id . ', ' . $order->first_name . ' ' .$order->last_name;



                },

                'filter' => \common\models\Order::getOrdersAsArray()

            ],
            [
                'label' => Yii::t('common', 'Canvas type'),
                'attribute' => 'type',

                'value' => function ($model) {
                    /* @var \common\models\Canvas $model */

                    return $model->getType();

                },

                'filter' => \common\models\Canvas::getTypes()

            ],
            'created_at',
            'updated_at',


        ],
    ]); ?>
</div>
