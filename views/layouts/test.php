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

<div id="wb_LayoutGrid4">
    <div id="LayoutGrid4">
        <div class="row">
            <div class="col-1">
                <div id="wb_Text3">
                    <span id="wb_uid0">шапка</span>
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>

        <?= $content ?>

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
