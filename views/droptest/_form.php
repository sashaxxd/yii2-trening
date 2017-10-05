<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\depdrop\DepDrop;
use app\models\Dropdown;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\select2\Select2;


?>

<div class="droptest-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>
<!--    --><?php
//    $catList = \app\models\PodguznikCategory::find()->all();         //->andWhere(['<>','parent_id',0])
//    $catList = ArrayHelper::map($catList, 'id', 'name',
//        function($value) {
//        return str_repeat('-', count(explode('.', $value->id))) . $value->category->name;
//    }
////        function($value) {
////        return str_repeat('', count(explode('.', $value->name))) . $value->name;
////    }
//    );
//    Debug($catList);
//    ?>
<!--    --><?//= $form->field($model, 'cat')->dropDownList($catList, ['id' => 'cat-id', 'prompt' => '-- Select Category --']); ?>


       <?php
       $t =  app\models\PodguznikCategory::getHierarchy();
       Debug($t)?>


    <?=
    $form->field($model, 'cat', [
            'inputOptions' => [
                'class' => 'selectpicker '
            ]
        ]
    )->dropDownList(app\models\PodguznikCategory::getHierarchy(), ['id' => 'cat-id', 'prompt' => 'cat', 'class'=>'form-control required']);
    ?>



<!--    <div class="form-group field-product-category_id has-success">-->
<!--        <label class="control-label" for="product-category_id">Категория</label>-->
<!--        <select id="category-parent_id" class="form-control" name="Product[category_id]" aria-invalid="false">-->
<!---->
<!--            --><?//= \app\components\MenuWidget::widget(['tpl' => 'select_product', 'model' => $catList]) ?>
<!--        </select>-->
<!--    </div>-->

    <?php
    if (!$model->isNewRecord && isset($model->cat))
    {
        $subcatList = Dropdown::find()->where('id != drop_id and drop_id = :id', [':id' => $model->cat])->all();
        $subcatList_ = ArrayHelper::map($subcatList, 'id', 'name');

        if (isset($model->subcat))
        {
            $subcatList = [$model->subcat => $model->subcats->name];
            unset($subcatList_[$model->subcat]);
            $subcatList = $subcatList + ['' => 'Select...'];
        }
        else
        {
            $subcatList = ['' => 'Select...'];
        }

        $subcatList = $subcatList + $subcatList_;
    }
    else
        $subcatList = [];

    echo $form->field($model, 'subcat')->widget(DepDrop::classname(), [
        'options' => ['id' => 'subcat-id'],
        'data' => $subcatList,
        'pluginOptions' => [
            'depends' => ['cat-id'],
            'placeholder' => 'Select...',
            'url' => Url::to(['subcat'])
        ]
    ]);
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>