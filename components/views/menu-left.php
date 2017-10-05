<?php foreach($model as $model):?>
<?php endforeach ?>
<?php //Debug($model->category)?>
    <?php foreach($model->category as $item):?>
        <li><a href="


        <?php switch (Yii::$app->controller->id): ?>
<?php case 'podguzniki': ?>
     <?= \yii\helpers\Url::to(['/podguzniki/category/', 'alias' => $item['alias'], 'id' => $item['id']])?>
     <?php break ?>
     <?php case 'trusiki-podguzniki': ?>
     <?= \yii\helpers\Url::to(['/trusiki-podguzniki/category/', 'alias' => $item['alias'], 'id' => $item['id']])?>
     <?php break ?>
<?php endswitch ?>

        " target="_self"><?= $item->name ?>


            </a>
        </li>
    <?php endforeach ?>



<?php
echo Yii::$app->controller->id; //имя текущего контроллера
//            //Yii::$app->controller получить контроллер как объект
//            echo Yii::$app->controller->action->id; //имя текущего экшена
//            echo Yii::$app->controller->module->id; //имя текущего модуля

?>
