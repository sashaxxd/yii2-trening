<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 11.05.2017
 * Time: 0:03
 */

namespace app\modules\admin\models;


use yii\base\Model;

class UploadImage extends  Model //Cоздали модель для загрузки
{
    public $image;

    public function rules()
    {
        return [
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    public function UploadedFile($file)
    {
        $file->saveAs(\Yii::getAlias('@web'). 'images/' . $file->name);
        return $file->name;
    }

}