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
use yii\web\HttpException;


class TestController extends  MainController
{
        public  $layout = 'test'; //Шаблон

        public function actionIndex()
    {



        $this->setMeta('Название сайта');//Мета тэги

        //$model = Test::find()->where(['text' => 'Описание 2'])->one();
        //$model = Test::find()->select('id, name, text')->orderBy('id DESC')->all();//Через запятую то что нужно
        $query = Test::find()->select('id, name, text')->orderBy('id DESC');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3,
            'pageSizeParam' => false, 'forcePageParam' => false ]);
        $model = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index',[
                'model' => $model,
                'pages' => $pages,
            ]
        );
    }

    public function actionView()
    {

        
        $this->setMeta('Название статьи');//Мета тэги

        $id = Yii::$app->request->get('id');

        $model = Test::findOne($id);
        if(empty($model)) throw new HttpException(404, 'Нет такой страницы');
        return $this->render('view',[
            'model' => $model,
        ]);
    }







}