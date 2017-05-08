<?php
/**
 * User: noutsasha
 * Date: 07.05.2017
 * Time: 12:22
 */

namespace app\controllers;
use app\models\Test;


class TestController extends  MainController
{
    public function actionIndex()
    {
       $model = Test::find()->all();
        return $this->render('index',[
                'model' => $model,
            ]
        );
    }

}//Заливка на комп