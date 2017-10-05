<?php
use yii\widgets\ActiveForm;

$this->registerCssFile('/css/jquery-ui.css');

?>
    <div id="check_filter">
        <?php $form = ActiveForm::begin(['id' => 'form-ajax']); ?>
        <div class="col-1">
            <div id="pampers_Text3">
                <span id="pampers_uid5">По виду</span>
            </div>
            <hr id="Line1">
            <hr id="Line2">
            <div id="pampers_Checkbox1">
                <?php  echo $form->field($searchModel, 'view',[
                    'template' => '{input}<label for="Checkbox1"></label>',
                ])->checkbox([ 'value' => 'Premium Care Pants', 'class' => 'checkbox', 'id' => 'Checkbox1', 'label' => null])->label(false) ?>

                <!--        <input type="hidden" name="ProductSearch[sale]" value="0"><label>-->
                <!---->
                <!--            <input type="checkbox" id="Checkbox1" name="Checkbox1" value="on"><label for="Checkbox1"></label>-->
                <!--            Sale</label>-->
            </div>
            <label for="Checkbox1" id="Label1">Premium Care Pants</label>
            <hr id="Line4">
            <div id="pampers_Checkbox2">
                <?php  echo $form->field($searchModel, 'view2',[
                    'template' => '{input}<label for="Checkbox2"></label>',
                ])->checkbox([ 'value' => 'Pants', 'class' => 'checkbox', 'id' => 'Checkbox2', 'label' => null])->label(false) ?>
            </div>
            <label for="Checkbox2" id="Label2">Pants</label>

            <hr id="Line5">

            <div id="pampers_Text4">
                <span id="pampers_uid6">По размеру</span>
            </div>
            <hr id="Line6">
            <hr id="Line7">
            <div id="pampers_Checkbox4">
                <input type="checkbox" id="Checkbox4" name="Checkbox1" value="on"><label for="Checkbox4"></label>
            </div>
            <label for="Checkbox4" id="Label4">1 размер</label>
            <hr id="Line8">
            <div id="pampers_Checkbox5">
                <input type="checkbox" id="Checkbox5" name="Checkbox1" value="on"><label for="Checkbox5"></label>
            </div>
            <label for="Checkbox5" id="Label5">2 размер</label>
            <hr id="Line9">
            <div id="pampers_Checkbox6">
                <input type="checkbox" id="Checkbox6" name="Checkbox1" value="on"><label for="Checkbox6"></label>
            </div>
            <label for="Checkbox1" id="Label6">3 размер</label>
            <hr id="Line10">
            <div id="pampers_Checkbox7">
                <input type="checkbox" id="Checkbox7" name="Checkbox1" value="on"><label for="Checkbox7"></label>
            </div>
            <label for="Checkbox6" id="Label7">4  размер</label>
            <hr id="Line11">
            <div id="pampers_Checkbox8">
                <input type="checkbox" id="Checkbox8" name="Checkbox1" value="on"><label for="Checkbox8"></label>
            </div>
            <label for="Checkbox7" id="Label8">5  размер</label>
            <hr id="Line12">
            <div id="pampers_Checkbox9">
                <input type="checkbox" id="Checkbox9" name="Checkbox1" value="on"><label for="Checkbox9"></label>
            </div>
            <label for="Checkbox9" id="Label9">6 размер</label>
            <hr id="Line13">
            <div id="pampers_Text5">
                <span id="pampers_uid7">По цене</span>
            </div>
            <hr id="Line14">
            <hr id="Line15">
            <div id='options'>
                Цена:

                <label for='price'>
                    От:

                    <?php  echo $form->field($searchModel, 'price')->textInput(['id' => 'price',])->label(false) ?>

                </label>
                <label for='price2'>
                    До:
                    <?php  echo $form->field($searchModel, 'price2')->textInput(['id' => 'price2'])->label(false) ?>
                </label>
                <?php ActiveForm::end(); ?>

            </div>
            <div id="slider_price" ></div>
            <hr id="Line16">
            <hr id="Line48">
        </div>
    </div>
<?php
$this->registerJSFile('/js/jquery-ui.js', ['depends' => 'yii\web\JqueryAsset']);
$this->registerJSFile('/js/main.js', ['depends' => 'yii\web\JqueryAsset']);