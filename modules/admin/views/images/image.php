<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="images-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>



    <?= $form->field($model, 'image')->fileInput() //Передаем экземпляру класса $model свойству image значение из формы?>



    <div class="form-group">
        <?= Html::submitButton('Submit' ,['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
