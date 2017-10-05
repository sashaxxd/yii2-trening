<li>
    <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']]); ?>">
        <?=$tab . $category['name']?>
        <?php if( isset($category['childs']) ): ?>
            <span class="pull-right"><i class="fa fa-folder"></i></span>
        <?php endif;?>
    </a>
    <?php if( isset($category['childs']) ): ?>
        <ul>
            <?= $this->getMenuHtml($category['childs'], $tab . "&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;")?>
        </ul>
    <?php endif;?>
</li>