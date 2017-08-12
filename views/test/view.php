<?php
use yii\BaseYii;
use yii\helpers\Html;
use zxbodya\yii2\galleryManager\GalleryManager;

?>
<?php
$this->registerJsFile('@web/js/main.js', ['depends' => [yii\web\JqueryAsset::className()]]); ?>
<div id="wb_LayoutGrid7">
    <div id="LayoutGrid7">
        <div class="row">
            <div class="col-1">
                <div id="wb_Breadcrumb1">
                    <?php $this->params['breadcrumbs'][] = $model->name; // Хлебные крошки?>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="wb_LayoutGrid1">
    <div id="LayoutGrid1">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text1">
                    <span id="wb_uid1"><?= $model->name ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="wb_LayoutGrid2">
    <div id="LayoutGrid2">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text2">
                    <span id="wb_uid2"><?= $model->text ?></span>
<?php


//Audio Player
//echo xj\jplayer\AudioWidget::widget([
//    'mediaOptions' => [
//        'title' => "Cro Magnon Man",
//        'm4a' => 'http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3',
//        'oga' => 'http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg',
//
//    ],
//
//    'skinAsset' => 'xj\jplayer\skins\BlueAssets',
//
//    'jsOptions' => [
//
//         'cssSelectorAncestor' => "#jp_container_1",
//         'swfPath' => "js",
//         'supplied' => "m4a, oga",
//         'useStateClassSkin' => true,
//         'autoBlur' => false,
//         'smoothPlayBar' => true,
//         'keyEnabled' => true,
//         'remainingDuration' => true,
//         'toggleDuration' => true
//    ],
//]);


?>
    <!-- тут массив-->
<?php
//foreach($model2->getBehavior('galleryBehavior')->getImages() as $image) {
//    echo Html::img($image->getUrl('medium'));
//}
//?>
                    <div id="wb_main_gallery">
                        <div id="main_gallery">
                            <div class="row">
                                <div class="col-1">
                                    <div id="wb_PhotoGallery1">
                                        <div id="PhotoGallery1">
                                            <div class="thumbnails">

                                                <?php      foreach($model2->getBehavior('galleryBehavior')->getImages() as $image):?>
                                                    <div class="thumbnail">
                                                        <a href="<?= $image->getUrl('medium'); ?>"><?= Html::img("/images/placeholder.gif", ['alt' => 'Наш логотип', 'data-src' => $image->getUrl('medium')]) ?></a>
                                                    </div>
                                                <?php endforeach; ?>



                                                <div class="clearfix visible-col3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

</div>

            </div>

        </div>

    </div>
<!--    <div id="wb_pod_gallery">-->
<!--        <div id="pod_gallery">-->
<!--            <div class="row">-->
<!--                <div class="col-1">-->
<!--                    <ul id="SlideShow1">-->
<!--                        <li><img class="image" id="wb_uid0" --><?php
//                            foreach($model2->getBehavior('galleryBehavior')->getImages() as $image) {
//                                echo Html::img($image->getUrl('medium'));
//                            }
//                            ?><!-- alt="" title=""></li>-->
<!---->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


</div>



<div id="wb_LayoutGrid3">
    <div id="LayoutGrid3">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>

