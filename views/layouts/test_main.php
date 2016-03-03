<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
<?php $this->beginBody() ?>
<center>
<div id="border">
    <?= /* header block */ ?>
    <?= /* left_bar block */ ?>
    <div id="mainarea">
    <?= /* menus block*/ ?>
        <div id="main">
<!--            Content block     -->
            <?= $content ?>
        </div>
    </div>
    <div id='bottom'>
        <?= /* menu bottom block */ ?>
    </div>
    <div class="copy"><span class="style1"> Copyright 2010 Название сайта </span>
    </div>
</div>
</center>
<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>