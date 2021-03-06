<?php
/**
 * Created by PhpStorm.
 * User: denisov
 * Date: 27.09.2017
 * Time: 10:51
 */


namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use yii\bootstrap\Dropdown;
use yii\bootstrap\Html;

class LanguageSelector extends Widget
{
    private static $_labels;

    private $_isError;
    public $items;


    public function init()
    {
        $items = [];

        $route = Yii::$app->controller->route;
        $appLanguage = Yii::$app->language;
        $params = $_GET;
        $this->_isError = $route === Yii::$app->errorHandler->errorAction;

        array_unshift($params, '/' . $route);

        foreach (Yii::$app->urlManager->languages as $language) {
            $isWildcard = substr($language, -2) === '-*';
            if (
                // $language === $appLanguage ||
                // Also check for wildcard language
                $isWildcard && substr($appLanguage, 0, 2) === substr($language, 0, 2)
            ) {
                continue;   // Exclude the current language
            }
            if ($isWildcard) {
                $language = substr($language, 0, 2);
            }
            $params['language'] = $language;
            $this->items[] = [
                'label' => self::label($language),
                'url' => $params,
                'active' => $language === $appLanguage
            ];
        }
        parent::init();
    }

    public function run()
    {

        // Only show this widget if we're not on the error page
        if ($this->_isError) {
            return '';
        } else {

            ob_start();
            echo "<ul class='lang'>";
            foreach ($this->items as $key=>$item) {
                echo "<li>";
                if($item['active']) {
                    echo Html::a($item['label'] );
                } else {
                    echo "<span class='vnut'>";
                    echo Html::a($item['label'], [$item['url'][0], 'language' => $item['url']['language']]);
                    echo "</span>";
                }

                if( $key  != count ($this->items) -1 ) echo "&nbsp;|&nbsp;";

                echo "</li>";
            }
            echo "</ul>";


            $content = ob_get_clean();
            return $content;
        }
    }

    public static function label($code)
    {
        if (self::$_labels === null) {
            self::$_labels = [

                //'ru' => Yii::t('common', 'Русский'),
                'ru' => 'RU',

                //'en' => Yii::t('common', 'English'),
                'en' => 'EN',
            ];
        }

        return isset(self::$_labels[$code]) ? self::$_labels[$code] : null;
    }
}