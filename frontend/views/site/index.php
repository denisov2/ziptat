<?php

/* @var $this yii\web\View */

$this->title = Yii::t('common' , 'Stickers and their meaning');
?>


<?= \frontend\widgets\PopularLabels::widget(); ?>

<?= \frontend\widgets\NewLabels::widget(); ?>

<?= \frontend\widgets\FeedBackForm::widget(); ?>


<div class="tatutext"><?= $this->title ?></div>
<div class="tatutextopisanie">
    <p>
    <?=Yii::t('common' , 'Selecting a sticker for application is a complex process. The true meaning of the symbol is open only to its owner, but it is much easier to find this symbol amongst the many stickers in our catalog.')?>
    </p>

    <p>Вы легко найдете идею для наклеки по фото в одной из категорий. После выбора направления
        стоит ознакомиться с полным значением Наклейки в разных периодах и кругах общества.
        После этого нужно четко определить форму будущей Наклейки в виде эскиза и выбрать один
        из салонов.</p>

    <p>И не важно, есть ли смысл у вашего рисунка или нет. Главное, носите наклеки с
        удовольствием!</p>
</div>
