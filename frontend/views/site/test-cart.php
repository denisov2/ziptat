<?php
use dvizh\cart\widgets\BuyButton;
use dvizh\cart\widgets\TruncateButton;
use dvizh\cart\widgets\CartInformer;
use dvizh\cart\widgets\ElementsList;
use dvizh\cart\widgets\DeleteButton;
use dvizh\cart\widgets\ChangeCount;
use dvizh\cart\widgets\ChangeOptions;

?>

<?php /* Выведет кнопку покупки */


$elements = yii::$app->cart->elements;

$model = \common\models\Label::findOne(7);
?>


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



<?php


echo BuyButton::widget([
    'model' => $model,
    'text' => 'Заказать',
    'htmlTag' => 'a',
    'cssClass' => 'custom_class'
]) ?>


<?php

echo CartInformer::widget(['htmlTag' => 'a', 'offerUrl' => '/?r=cart', 'text' => '{c} на {p}']); ?>

<?php// echo TruncateButton::widget(); ?>

<?php // echo ElementsList::widget(['type' => ElementsList::TYPE_DROPDOWN]); ?>

<?php
foreach ($elements as $item) {

    ?>
    <?php echo  DeleteButton::widget(['model' => $item]); ?>

    <?php echo  ChangeCount::widget(['model' => $item]); ?>

    <?php echo  ChangeOptions::widget(['model' => $item]); ?>

<?php

}


?>
