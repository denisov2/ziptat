<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Surface */

$this->title = Yii::t('common', 'Create Surface');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Surfaces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surface-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
