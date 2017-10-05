<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 07.05.2016
 * Time: 10:35
 */
namespace app\components;


use app\models\PodguznikCategory;
use yii\base\Widget;
use Yii;


class MenuLeftWidget extends Widget
{


    public function run()
    {
        $model = PodguznikCategory::find()->with(['category'])->where(['alias' => Yii::$app->controller->id])->all();
        return $this -> render('menu-left', ['model' => $model]);
    }


}