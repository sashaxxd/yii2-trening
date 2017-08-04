<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 31.07.2017
 * Time: 22:04
 */

namespace app\controllers;

use \moonland\phpexcel\Excel;
use Yii;
use app\models\Ex;
use yii\web\UploadedFile;

class ExController extends MainController
{

    public $layout = 'test';

    public function actionEx()
    {

         $model = new Ex();


        if (Yii::$app->request->isPost) {
            $model->excelFile = UploadedFile::getInstance($model, 'excelFile');
            if ($model->excelFile) {
                $model->upload();
                $filename = 'upload/' . $model->excelFile->baseName . '.' . $model->excelFile->extension;


                $data = Excel::import($filename, [
                    'setFirstRecordAsKeys' => true,
                    'setIndexSheetByName' => true,
                    'getOnlySheet' => 'sheet1',
                ]);
                foreach ($data as $key => $item) {
                    $model = new Ex();
                    $model->text = $item['text'];
                    $model->name = $item['name'];
                    $model->save();
                }
//                for($i = 0; $i < 20; $i++){
//                    $model = new Ex();
//                    $model->text = 'dsf' . $i;
//                    $model->name = 'dsf' . $i;
//                    $model->save();
//                }

                Yii::$app->session->setFlash('success', 'Файл загружен, таблица в базе изменена');
            }
        }

        return $this->render('ex', [
            'model' => $model,
            'data' => $data,
        ]);
    }
}

//echo json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

