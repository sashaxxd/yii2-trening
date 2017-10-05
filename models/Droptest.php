<?php

namespace app\models;

use Yii;
use app\models\Dropdown;


/**
 * This is the model class for table "droptest".
 *
 * @property integer $id
 * @property integer $cat
 * @property integer $subcat
 * @property string $name
 */
class Droptest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'droptest';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat', 'subcat', 'name'], 'required'],
            [['cat', 'subcat'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat' => 'Cat',
            'subcat' => 'Subcat',
            'name' => 'Name',
        ];
    }

    public function getCats()
    {
        return $this->hasOne(Dropdown::className(), ['id' => 'cat']);
    }

    public function getSubcats()
    {
        return $this->hasOne(Dropdown::className(), ['id' => 'subcat']);
    }
}
