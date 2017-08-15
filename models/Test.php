<?php
/**
 * User: noutsasha
 * Date: 07.05.2017
 * Time: 12:30
 */

namespace app\models;


use yii\db\ActiveRecord;
use zxbodya\yii2\galleryManager\GalleryBehavior;
use Imagine\Image\Box;
use Yii;

class Test extends ActiveRecord
{
    public static  function tableName()
    {
        return 'test';
    }

//    public function getGallery()
//    {
//        return $this->hasMany(GalleryImage::className(), ['name' => 'name']);
//    }




    public function behaviors()
    {
        return [
            'galleryBehavior' => [
                'class' => GalleryBehavior::className(),
                'type' => 'gallery',
                'extension' => 'jpg',
                'directory' => Yii::getAlias('@webroot') . '/uploads',
                'url' => Yii::getAlias('@web') . '/uploads',
                'versions' => [
                    'small' => function ($img) {
                        /** @var ImageInterface $img */
                        return $img
                            ->copy()
                            ->thumbnail(new Box(200, 200));
                    },
                    'medium' => function ($img) {
                        /** @var ImageInterface $img */
                        $dstSize = $img->getSize();
                        $maxWidth = 800;
                        if ($dstSize->getWidth() > $maxWidth) {
                            $dstSize = $dstSize->widen($maxWidth);
                        }
                        return $img
                            ->copy()
                            ->resize($dstSize);
                    },
                ]
            ]
        ];
    }


}