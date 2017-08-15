<?php
use yii\helpers\Html;
use zxbodya\yii2\galleryManager\GalleryManager;


if ($model2->isNewRecord) {
    echo 'Can not upload images for new record';
} else {
    echo GalleryManager::widget(
        [
            'model' => $model2,
            'behaviorName' => 'galleryBehavior',
            'apiRoute' => 'galleryApi'
        ]
    );
}

?>
    <!-- тут массив-->
<?php
//foreach($model2->getBehavior('galleryBehavior')->getImages() as $image) {
//    echo Html::img($image->getUrl('medium'));
//}