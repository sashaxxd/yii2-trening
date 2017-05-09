<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "images".
 *
 * @property string $id
 * @property string $img
 * @property string $name
 */
class Images extends \yii\db\ActiveRecord
{

    public  $image;
    public  $gallery;


    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img', 'name'], 'required'],
            [['img', 'name'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID Картинки',
            'image' => 'Картинка',
            'name' => 'Имя картинки',
        ];
    }
    public function upload()
    {
        if($this->validate()){
            $path = 'images/store/' . $this->image->baseName . '.'.$this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path);
            return true;
        }else{
            return false;
        }
    }
}
