<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 07.05.2016
 * Time: 10:35
 */
namespace app\components;



use app\models\Product;
use app\models\ProductSearch;
use yii\base\Widget;
use Yii;


class PampersFilterWidget extends Widget
{


    public function run()
    {


        $searchModel = new ProductSearch();

        $searchModel->price2 = Yii::$app->request->get('ProductSearch')['price2'];

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $model = $dataProvider->sort->attributes;
        return $this -> render('pampers-filter', [
            'model' => $model,
            'searchModel' => $searchModel,
        ]);
    }


}