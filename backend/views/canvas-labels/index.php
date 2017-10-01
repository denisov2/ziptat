<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CanvasLabelsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('common', 'Canvas Labels');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="canvas-labels-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('common', 'Create Canvas Labels'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'canvas_id',
            'label_id',
            'top',
            'left',
            // 'width',
            // 'height',
            // 'rotate',
            // 'color',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
