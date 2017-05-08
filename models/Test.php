<?php
/**
 * User: noutsasha
 * Date: 07.05.2017
 * Time: 12:30
 */

namespace app\models;


use yii\db\ActiveRecord;

class Test extends ActiveRecord
{
    public static  function tableName()
    {
        return 'test';
    }

}