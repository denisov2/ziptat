<?php
/**
 * Created by PhpStorm.
 * User: denisov
 * Date: 27.09.2017
 * Time: 10:51
 */

namespace frontend\widgets;

use common\models\Category;
use common\models\Subcategory;
use yii\base\Widget;

class SearchMain extends Widget
{
    public function run()
    {
        ob_start(); ?>

        <!-- search -->
        <div class="t-containere">
            <div class="desktop-search search">
                <div class="search-block">
                    <!-- left -->
                    <div class="left-btn">


                        <div class="add-category">
                            <span class="add-categoryyy">Добавить категорию </span>
                            <span class="add-categoryy">▼</span>

                            <div class="categor">
                                <ul class="categoryy">

                                    <?php
                                    $categories = Category::find()->where(['active' => 1])->all();
                                    $lang = \Yii::$app->language;
                                    foreach ($categories as $category) {
                                        /* @var Category $category */
                                        $subcategories = Subcategory::find()->where(['active' => 1, 'category_id' => $category->id])->all();
                                        ?>
                                        <li>
                                            <span class="arou search-category"><?= $category->{"name_$lang"} ?> </span>
                                            <?php if ($subcategories) { ?>
                                                <span class="span2lv"> ▼</span>
                                                <ul class="categoryyy">
                                                    <?php
                                                    foreach ($subcategories as $subcategory) {
                                                        /* @var Subcategory $subcategory */
                                                        ?>
                                                        <li>
                                                            <span data-subcategory-id="<?=$subcategory->id?>" class="arou search-subcategory"><?= $subcategory->{"name_$lang"} ?></span>
                                                        </li>
                                                        <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                        <?php
                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="search-block-fuul">
                        <input type="text" class="searchblock" id="kek2" placeholder="Введите ключевое слово">
                        <button id="main_search" class="searchblock" type="submit"></button>
                    </div>
                    <!-- right -->
                </div>
            </div>
        </div>

        <?php
        return ob_get_clean();;
    }
}