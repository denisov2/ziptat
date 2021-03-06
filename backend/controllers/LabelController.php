<?php

namespace backend\controllers;

use Yii;
use common\models\Label;
use backend\models\LabelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\bootstrap\Alert;
use tpmanc\imagick\Imagick;

/**
 * LabelController implements the CRUD actions for Label model.
 */
class LabelController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Label models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LabelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Label model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Label model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Label();

        if ($model->load(Yii::$app->request->post()) ) {

        if ($model->validate()) $model->save();
        else return $this->render('update', [
            'model' => $model,
        ]);

        $model->file_image = UploadedFile::getInstance($model, 'file_image');



        $model->uploadImages();
        $model->save(false);

        return $this->render('view', [
            'model' => $model,
        ]);


    } else {
        return $this->render('create', [
            'model' => $model,
        ]);
    }
    }

    /**
     * Updates an existing Label model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {

            if ($model->validate()) $model->save();
            else return $this->render('update', [
                'model' => $model,
            ]);

            $model->file_image = UploadedFile::getInstance($model, 'file_image');



            $model->uploadImages();
            $model->save(false);

            return $this->render('view', [
                'model' => $model,
            ]);


        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Label model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    public function actionGenerate($id) {

        $model = $this->findModel($id);


        $original_image_path = Yii::getAlias("@labels/".Label::ORIGINAL_FOLDER."/{$model->image_original}");
        $big_image_path = Yii::getAlias("@labels/".Label::BIG_FOLDER."/{$model->image_original}");
        $middle_image_path = Yii::getAlias("@labels/".Label::MIDDLE_FOLDER."/{$model->image_original}");
        $thumbnail_image_path = Yii::getAlias("@labels/".Label::THUMBNAIL_FOLDER."/{$model->image_original}");

        $big_image = null;
        $middle_image = null;
        $thumbnail_image = null;

        if(file_exists($original_image_path)) {

            $imagick = Imagick::open($original_image_path);
            $imagick->resize(Label::BIG_WIDTH, false)->saveTo($big_image_path);
            $big_image = file_exists($big_image_path);

            $imagick = Imagick::open($original_image_path);
            $imagick->resize(Label::MIDDLE_WIDTH, false)->saveTo($middle_image_path);
            $middle_image = file_exists($middle_image_path);


            $imagick = Imagick::open($original_image_path);
            $imagick->resize(Label::THUMBNAIL_WIDTH, false)->saveTo($thumbnail_image_path);
            $thumbnail_image = file_exists($thumbnail_image_path);

            \Yii::$app->session->setFlash('generating_images',\Yii::t('common', 'Generating images'));
        }


        if($model && Yii::$app->request->isPost) {




        }

        return $this->render('generate', [
            'model' => $model,
        ]);


    }

    /**
     * Finds the Label model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Label the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Label::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
