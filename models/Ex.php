<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "test".
 *
 * @property string $id
 * @property string $name
 * @property string $text
 */
class Ex extends \yii\db\ActiveRecord
{


    public $excelFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['name', 'text'], 'required'],
            [['text'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['excelFile'], 'file',  'extensions' => 'xlsx'], //'skipOnEmpty' => false,
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
        ];
    }

    public function upload(){
        if($this->validate()){
            $path = 'upload/' . $this->excelFile->baseName . '.' . $this->excelFile->extension;
            $this->excelFile->saveAs($path);
            return true;
        }else{
            return false;
        }
    }
}
