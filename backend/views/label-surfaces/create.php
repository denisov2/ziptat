<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\LabelSurfaces */

$this->title = Yii::t('common', 'Create Label Surfaces');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Label Surfaces'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="label-surfaces-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
