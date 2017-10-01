<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CanvasLabels */

$this->title = Yii::t('common', 'Create Canvas Labels');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Canvas Labels'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="canvas-labels-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
