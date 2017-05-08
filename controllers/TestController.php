<?php
/**
 * User: noutsasha
 * Date: 07.05.2017
 * Time: 12:22
 */

namespace app\controllers;
use app\models\Test;
use Yii;


class TestController extends  MainController
{
        public  $layout = 'test'; //Шаблон

        public function actionIndex()
    {



        $this->setMeta('Название сайта');//Мета тэги

        //$model = Test::find()->where(['text' => 'Описание 2'])->one();
        $model = Test::find()->select('id, name, text')->all();//Через запятую то что нужно
        return $this->render('index',[
                'model' => $model,
            ]
        );
    }




}//Заливка на комп