<?php
namespace frontend\controllers;

use common\models\Label;
use common\models\Subcategory;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SearchController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $lang = Yii::$app->language;
        $subcategories_filter = Yii::$app->request->get('subcategories-filter');
        $keyword = Yii::$app->request->get('keywords');
        $selected_subcategories_ids = $subcategories_filter ? explode(';', $subcategories_filter) : [];
        $keywords = $keyword ? explode(' ', $keyword) : [];

        $names = [];
        foreach ($selected_subcategories_ids as $selected_subcategory_id) {
            $subcategory = Subcategory::findOne($selected_subcategory_id);
            $names[] = $subcategory->{"name_$lang"};
        }
        $labels = Label::find()
            ->where(['active' => 1])
            ->andFilterWhere(['subcategory_id'=>$selected_subcategories_ids  ])
            ->andFilterWhere(['like', "name_$lang", $keywords])
            ->all();
        $title = $keyword . ' , ' . implode(", ", $names);





        return $this->render('index', [
            'labels' => $labels,
            'title' => $title,
            'lang' => Yii::$app->language
        ]);
    }

}
