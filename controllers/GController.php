<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 10.08.2017
 * Time: 18:54
 */

namespace app\controllers;



use app\models\GalleryImage;
use app\models\Test;
use zxbodya\yii2\galleryManager\GalleryManagerAction;

class GController extends \yii\web\Controller
{


    public function actions()
    {
        return [
            'galleryApi' => [
                'class' => GalleryManagerAction::className(),
                // mappings between type names and model classes (should be the same as in behaviour)
                'types' => [
                    'gallery' => Test::className()
                ]
            ],
        ];
    }

    public function actionIndex()
    {
        $model2 = Test::find()->all();
        $model = Test::find()->all();
        return $this->render('index', [
            'model' => $model,
            'model2' => $model2[0],
        ]);
    }

//    public function actiongalleryApi()
//    {
//        echo "OK";
//    }

}
