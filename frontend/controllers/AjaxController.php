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
use yii\web\NotFoundHttpException;


/**
 * Site controller
 */
class AjaxController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionLike()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if (Yii::$app->request->isAjax) {
            $product_id = Yii::$app->request->get('product_id');
            $label = Label::findOne($product_id);

            if($label) {

                $label->likes = $label->likes + 1;

                if($label->save()) {

                    return [
                        'success' => 1,
                        'likes' => $label->likes,
                    ];
                }
            }
        }
        throw new NotFoundHttpException();
    }


}
