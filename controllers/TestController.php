<?php
/**
 * User: noutsasha
 * Date: 07.05.2017
 * Time: 12:22
 */

namespace app\controllers;
use app\models\Test;
use Yii;
use yii\data\Pagination;


class TestController extends  MainController
{
        public  $layout = 'test'; //Шаблон

        public function actionIndex()
    {



        $this->setMeta('Название сайта');//Мета тэги

        //$model = Test::find()->where(['text' => 'Описание 2'])->one();
        //$model = Test::find()->select('id, name, text')->orderBy('id DESC')->all();//Через запятую то что нужно
        $query = Test::find()->select('id, name, text')->orderBy('id DESC');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
        $model = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index',[
                'model' => $model,
                'pages' => $pages,
            ]
        );
    }




}//Заливка на комп