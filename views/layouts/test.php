<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\TestAsset;

TestAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- МЕНЮ -->
<div id="wb_pod_menu">
    <div id="pod_menu">
        <div class="row">
            <div class="col-1">
                <div id="wb_menu">
                    <label class="toggle" for="menu-submenu" id="menu-title"><span id="menu-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
                    <input type="checkbox" id="menu-submenu">
                    <ul class="menu" id="menu">
                        <li><a href="#">&#1043;&#1083;&#1072;&#1074;&#1085;&#1072;&#1103;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ШАПКА -->
<div id="wb_LayoutGrid4">
    <div id="LayoutGrid4">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text3">
                    <span id="wb_uid0">
                           <div class="container">
                              Шапка
                              
                           </div>
                    </span>
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>
<!-- ХЛЕБНЫЕ КРОШКИ -->
<div id="wb_LayoutGrid7">
    <div id="LayoutGrid7">
        <div class="row">
            <div class="col-1">
                <div id="wb_Breadcrumb1">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- КОНТЕНТ -->
        <?= $content ?>
<!-- ФУТЕР -->
<div id="wb_LayoutGrid5">
    <div id="LayoutGrid5">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text4">
                    <span id="wb_uid3">ФУТЕР</span>
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
