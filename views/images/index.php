<?php

use \yii\helpers\Html;

$this->registerCssFile('@web/css/images.css');
?>
<div id="wb_LayoutGrid7">
    <div id="LayoutGrid7">
        <div class="row">
            <div class="col-1">
                <div id="wb_Breadcrumb1">
                    <?php $this->params['breadcrumbs'][] = $this->title; // Хлебные крошки?>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="wb_images_block">
    <div id="images_block">
        <div class="row">
            <?php if(!empty($model)): ?>
            <?php foreach ($model as $item):?>
            <div class="col-1">
                <div id="wb_zag1">
                    <span id="wb_zag"><?=  $item->name ?></span>
                </div>
                <div id="wb_Image1">
                    <img src="images/<?=  $item->kartinka ?>" id="Image1" alt="" class="img">
                </div>
            </div>
            <?php endforeach;?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div id="wb_LayoutGrid7">
    <div id="LayoutGrid7">
        <div class="row">
            <div class="col-1">

            </div>
        </div>
    </div>
</div>