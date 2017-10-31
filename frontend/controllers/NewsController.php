<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;


/**
 * Site controller
 */
class NewsController extends Controller
{


    public function actionIndex()
    {
        return $this->render('index');
    }
   public function actionView()
    {
        return $this->render('view');
    }

}
