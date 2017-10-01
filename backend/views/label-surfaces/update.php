<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\LabelSurfaces */

$this->title = Yii::t('common', 'Update {modelClass}: ', [
    'modelClass' => 'Label Surfaces',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Label Surfaces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('common', 'Update');
?>
<div class="label-surfaces-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>