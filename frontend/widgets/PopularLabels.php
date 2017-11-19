<?php
/**
 * Created by PhpStorm.
 * User: denisov
 * Date: 27.09.2017
 * Time: 10:51
 */

namespace frontend\widgets;

use common\models\Label;
use yii\base\Widget;

class PopularLabels extends Widget
{
    public $lang;
    public $labels;

    public function init()
    {

        $this->lang = \Yii::$app->language;
        $this->labels = Label::find()->where(['status' => 1])->limit(12)->orderBy('likes DESC')->all();
        parent::init();

    }

    public function run()
    {


        ob_start(); ?>

        <div class="head_title">
            <span class="s"></span>
            <span class="sw"></span>
            <span class="sq"></span>
            <span class="se"></span>

            <h2>ПОПУЛЯРНЫЕ наклейки</h2>
        </div>

        <div class="grid">
            <?php foreach ($this->labels as $label) {
                /* @var $label Label */
                ?>
                <div class="item product-id-<?= $label->id ?>" data-product-id="<?= $label->id ?>">
                    <img data-src="<?= $label->getImageUrl(Label::MIDDLE_FOLDER) ?>"
                         src="<?= $label->getImageUrl(Label::THUMBNAIL_FOLDER) ?>" alt="" class="uvl">
                    <button class="save">Сохранить</button>
                    <button class="like">
                        <img src="/img/icon/like.png" alt="">
                    </button>
                    <div class="show">
                        <div class="figure">
                            <h3><?= $label->{"name_$this->lang"} ?></h3>
                            <button class="liked">
                                <img src="/img/icon/like.png" alt=""><?=$label->likes?>
                            </button>
                            <?= $label->{"description_$this->lang"} ?>
                            <div style="text-align: center;">
                                <button class="choose">Выбрать</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="popup-main product-id-<?= $label->id ?>">
                    <div class="popupuvl">
                        <img src="/img/icon/closse.png" class="csa" alt="">

                        <div class="imgbl">
                            <img src="/img/" style="width: 540px;" alt="">

                            <div class="save ty">Сохранить</div>
                            <div class="likeq">
                                <img src="/img/icon/like.png" alt="">
                            </div>
                        </div>
                        <div class="h3">
                            <h3><?= $label->{"name_$this->lang"} ?></h3>

                            <div class="like">
                                <img src="/img/icon/like.png" alt=""> <?=$label->likes?>
                            </div>
                            <?= $label->{"description_$this->lang"} ?>

                            <div class="vod">
                                <div class="lef">
                                    <div><img src="/img/icon/1.png" alt="">

                                        <div>Стена</div>
                                    </div>
                                    <div><img src="/img/icon/meb.png" alt="">

                                        <div>Мебель</div>
                                    </div>
                                    <div><img src="/img/icon/oboi.png" alt="">

                                        <div>Обои</div>
                                    </div>
                                    <div><img src="/img/icon/posud.png" alt="">

                                        <div>Посуда</div>
                                    </div>
                                    <div><img src="/img/icon/kaf.png" alt="">

                                        <div>Кафель</div>
                                    </div>
                                    <div><img src="/img/icon/odej.png" alt="">

                                        <div>Одежда</div>
                                    </div>
                                </div>
                                <div class="rig">
                                    <img src="/img/icon/max.png" alt="">Максимальный размер изображения - формат А4 (297мм x
                                    210мм)
                                </div>
                            </div>
                            <div class="zake">
                                <div class="one">Заказать еще</div>
                                <div class="two">Оформить заказ</div>
                                <a class="impor-1" href="">Закрыть</a>
                            </div>
                        </div>
                    </div>
                </div>


            <?php } ?>
        </div>

        <div class="punctir">
            <a href="http://verstka.integratic.ru/tatu-2/#" class="punctirspan">Показать все популярные наклеки
                <i class="material-icons">
                    <img src="/img/icon/arrow-down.png" alt="down">
                </i>
            </a>
        </div>






        <?php
        return ob_get_clean();;
    }
}