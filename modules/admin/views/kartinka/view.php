<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Images */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="images-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('ИЗМЕНИТЬ', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

        <?= Html::a('УДАЛИТЬ', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'img',
            'name',
            // Второй вариант. Формирование изображения и его параметров через анонимную функцию
            [
                'label' => 'Картинка',
                'format' => 'raw',
                'value' => function($data){
                    return Html::img(Url::to( '/images/' . $data->kartinka  ),[
                        'alt'=>'yii2 - картинка в gridview',
                        'style' => 'width:55px;'
                    ]);
                },
            ],
        ],
    ]) ?>

</div>
