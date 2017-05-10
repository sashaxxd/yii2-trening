<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="images-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>



    <?= $form->field($image, 'imageFile')->fileInput() ?>



    <div class="form-group">
        <?= Html::submitButton('Submit' ,['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
