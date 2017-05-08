<?php
/**
 * User: noutsasha
 * Date: 07.05.2017
 * Time: 12:19
 */

namespace app\controllers;


use yii\web\Controller;

class MainController extends  Controller
{
    protected function  setMeta($title = null, $keywords = null, $description = null)
    {
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' =>'description', 'content' => "$description"]);

    }

}