<?php
use yii\helpers\Html;
?>
<div id="lang">
    <?php
    //print_r($current);
    //print_r($langs);
    ?>

    <span id="current-lang">
        <?= $current->name;?> <span class="show-more-lang">▼</span>
    </span>
    <ul id="langs">
        <?php foreach ($langs as $lang):?>
            <li class="item-lang">
                <?= Html::a($lang->name, '/'.$lang->url.Yii::$app->getRequest()->getLangUrl()) ?>
            </li>
        <?php endforeach;?>
    </ul>
</div>