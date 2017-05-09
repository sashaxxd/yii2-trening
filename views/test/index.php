
<?php

if(!empty($model)): ?>
  <?  foreach ($model as $item):?>


<div id="wb_LayoutGrid1">
  <div id="LayoutGrid1">
    <div class="row">
      <div class="col-1">
        <div id="wb_Text1">
          <span id="wb_uid1"><a href="<?= yii\helpers\Url::to(['test/view', 'id' => $item->id]) ?>"><?= $item->name; ?></a></span>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="wb_LayoutGrid2">
  <div id="LayoutGrid2">
    <div class="row">
      <div class="col-1">
        <div id="wb_Text2">
          <span id="wb_uid2"><?= $item->text; ?></span>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="wb_LayoutGrid3">
  <div id="LayoutGrid3">
    <div class="row">
      <div class="col-1">
      </div>
      <div class="col-2">
      </div>
    </div>
  </div>
</div>

  <?php endforeach;?>


  <div id="wb_LayoutGrid6">
    <div id="LayoutGrid6">
      <div class="row">
        <div class="col-1">
          <div id="wb_Pagination1">
            <?= \yii\widgets\LinkPager::widget(['pagination' => $pages])?>
          </div>
        </div>
        <div class="col-2">
        </div>
      </div>
    </div>
  </div>


<?php endif; ?>