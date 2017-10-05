<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "podguznik_category".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $name
 * @property string $keywords
 * @property string $description
 * @property string $alias
 */
class PodguznikCategory extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'podguznik_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['name', 'alias'], 'required'],
            [['name', 'keywords', 'description', 'alias'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'alias' => 'Alias',
        ];
    }
//    public  function getCategory()
//    {
//        return $this->hasOne(PodguznikCategory::Classname(),['id' => 'parent_id'] );
//    }


//    public static function getHierarchy() {
//        $options = [];
//
//        $parents = self::find()->where("parent_id=0")->all();
//        foreach($parents as $id => $p) {
//            $children = self::find()->where("parent_id=:parent_id", [":parent_id"=>$p->id])->all();
//            $child_options = [];
//            foreach($children as $child) {
//                $child_options[$child->id] = $child->name;
//            }
//            $options[$p->name] = $child_options;
//        }
//        return $options;
//    }

    public static function getHierarchy() {
        $options = [];

        $parents = self::find()->where("parent_id=0")->all();
        foreach($parents as $id => $p) {
            $children = self::find()->where(["parent_id"=>$p->id])->all();
            $child_options = [];



            foreach($children as $child => $z) {




                $children2 = self::find()->where(["parent_id"=>$z->id])->all();
                $child_options2 = [];
                foreach($children2 as $child2) {

                    $child_options2[$child2->id] = $child2->name;
                }


                $child_options[$z->name] = $child_options2;
            }

            $options[$p->name] = $child_options;

        }
        return $options;
    }


}
