<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Label */

$this->title = Yii::t('common', 'Update {modelClass}: ', [
    'modelClass' => 'Label',
]) . $model->{'name_'.Yii::$app->language};
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Labels'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('common', 'Update');
?>
<div class="label-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
