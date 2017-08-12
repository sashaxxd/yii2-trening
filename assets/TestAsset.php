<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;


class TestAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/index.css',
        'css/site-main.css',
        'css/menu.css',
        'css/gallery.css',
        'magnificpopup/magnific-popup.css',
        
    ];
    public $js = [
        'js/jquery-1.12.4.min.js',
//        'js/wb.conveyerbelt.min.js',
        'js/wb.lazyload.min.js',
        'magnificpopup/jquery.magnific-popup.min.js',
//        'js/main.js',


    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
