<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\UploadForm;
use app\modules\admin\models\UploadImage;
use Yii;
use app\modules\admin\models\Images;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ImagesController implements the CRUD actions for Images model.
 */
class ImagesController extends Controller
{
    public  $layout = 'admin'; //Шаблон
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
     * Lists all Images models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Images::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Images model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Images model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Images();
        $model2 = new UploadImage();//Экземпляр класса модели



        if (Yii::$app->request->isPost) {//Если нажали кнопку
            $file = UploadedFile::getInstance( $model2, 'image');// В переменную записывается объект
            $model2->UploadedFile($file);
            $model->saveImage($model2->UploadedFile($file));

        }







        if ($model->load(Yii::$app->request->post()) && $model->save() && Yii::$app->request->isPost) {




            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'model2' => $model2,
               

            ]);
        }
    }

    /**
     * Updates an existing Images model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model2 = new UploadImage();//Экземпляр класса модели



        if (Yii::$app->request->isPost) {//Если нажали кнопку
            $file = UploadedFile::getInstance( $model2, 'image');// В переменную записывается объект
            $model2->UploadedFile($file);
            $model->saveImage($model2->UploadedFile($file));

        }


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'model2' => $model2,
            ]);
        }
    }

    /**
     * Deletes an existing Images model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Images model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Images the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Images::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

//    public function actionImage()
//    {
//        $model2 = new UploadImage();//Экземпляр класса модели
//
//
//        if (Yii::$app->request->isPost) {//Если нажали кнопку
//            $file = UploadedFile::getInstance( $model2, 'image');// В переменную записывается объект
//            $model2->UploadedFile($file);
//            echo $model2->UploadedFile($file);die();
//
//        }
//
//
//        return $this->render('image',
//            [
//                'model' => $model2,//Передаем модель в вид
//            ]
//            );
//    }
}
