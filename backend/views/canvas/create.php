<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Canvas */

$this->title = Yii::t('common', 'Create Canvas');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Canvas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="canvas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
