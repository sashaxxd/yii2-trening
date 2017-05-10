<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 10.05.2017
 * Time: 20:16
 */

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\modules\admin\models\UploadForm;
use yii\web\UploadedFile;


class UploadController extends Controller
{
    public function actionIndex()
    {
        $image = new UploadForm();

        if (Yii::$app->request->isPost) {
            $image->imageFile = UploadedFile::getInstance($image, 'imageFile');
            if ($image->upload()) {
                // file is uploaded successfully
                return;
            }
        }

        return $this->render('index', ['image' => $image]);
    }
}