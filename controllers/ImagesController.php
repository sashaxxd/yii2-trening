<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 09.05.2017
 * Time: 14:41
 */

namespace app\controllers;
use app\models\Images;


class ImagesController extends MainController
{
    public  $layout = 'test'; //Шаблон
    public function actionIndex()
    {
        $this->setMeta('Изображения');//Мета тэги
        
        $model = Images::find()->all();
            
        return $this->render('index',
            [
                'model' => $model,
            ]
            );
    }

}