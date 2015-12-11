<?php

/* @var $this yii\web\View */
use common\components\HelloWidget;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?=Yii::t('main', 'Congratulations')?>!</h1>


    </div>

    <div class="body-content">
        <?= HelloWidget::widget(['message' => false]) ?>
        <?php
        print_r($test[1]) ;
        ?>
    </div>
</div>
