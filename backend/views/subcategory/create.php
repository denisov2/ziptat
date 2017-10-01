<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Subcategory */

$this->title = Yii::t('common', 'Create Subcategory');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Subcategories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subcategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
