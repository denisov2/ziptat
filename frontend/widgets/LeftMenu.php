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
use Yii;

class LeftMenu extends Widget
{
    public $categories;
    public $lang;
    public $selected_subcategories;

    public function init() {

        $this->categories = Category::find()->where(['active' => 1])->all();
        $this->lang = \Yii::$app->language;

        $subcategories_filter = Yii::$app->request->get('subcategories-filter');
        $this->selected_subcategories = $subcategories_filter ? explode(';', $subcategories_filter) : [];


        parent::init();

    }
    public function run()
    {
        ob_start(); ?>

        <div class="head">
            <span>☰</span> КАТЕГОРИИ
        </div>

        <div class="accarBodyblock">
            <?php foreach($this->categories as $category) {
                /* @var Category $category */
                $subcategories = Subcategory::find()->where(['active' => 1 , 'category_id'=>$category->id ])->all();

                // Проверим, выбрана ли хоть одна подкатегория
                $display_container  = false;
                foreach($subcategories as $subcategory) {
                     /* @var Subcategory $subcategory */
                    if (in_array($subcategory->id, $this->selected_subcategories)) $display_container = true;
                }
                $container_style = $display_container ? " style='display:block' " : "";
                ?>
            <article class="accar body-inner">
                <h3><?= $category->{"name_$this->lang"}?></h3>
                <div class="container" <?=$container_style?>>
                    <div class="control-group">
                        <?php foreach($subcategories as $subcategory) {
                            /* @var Subcategory $subcategory */
                            $id = $subcategory->id;
                            $selected = in_array($id, $this->selected_subcategories) ? " checked='checked' ": "";



                            ?>

                        <label class="control control--checkbox">
                            <input type="checkbox" name="subcategory[]" value="<?=$id?>" <?=$selected?>/>
                            <span class="control__indicator"></span>
                            <span class="category-text"><?=$subcategory->{"name_$this->lang"}?></span>
                        </label>
                        <?php } ?>

                    </div>
                </div>
            </article>
        <?php } ?>
        </div>

        <?php
        return ob_get_clean();;
    }
}