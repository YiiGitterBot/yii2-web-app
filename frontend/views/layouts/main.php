<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => Yii::t('app', 'Home'), 'url' => ['/site/index']],
        ['label' => Yii::t('app', 'Achievements'), 'url' => ['/site/achievements']],
        ['label' => Yii::t('app', 'Resource'), 'items' => [
            '<li class="dropdown-header">' . Yii::t('app', 'Russian community') . '</li>',
            ['label' => Yii::t('app', 'Chat'), 'url' => 'https://gitter.im/yiisoft/yii2/rus'],
            ['label' => Yii::t('app', 'Community'), 'url' => 'http://www.yiiframework.ru/'],
            ['label' => Yii::t('app', 'Documentation'), 'url' => 'http://www.yiiframework.com/doc-2.0/guide-index.html'],
            '<li class="dropdown-header">' . Yii::t('app', 'English community') . '</li>',
            ['label' => Yii::t('app', 'Chat'), 'url' => 'https://gitter.im/yiisoft/yii2'],
            ['label' => Yii::t('app', 'Community'), 'url' => 'http://www.yiiframework.com/'],
            ['label' => Yii::t('app', 'Documentation'), 'url' => 'http://www.yiiframework.com/doc-2.0/guide-index.html']
        ]]
    ];

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::a('Yii Gitter Bot', 'https://github.com/YiiGitterBot') ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
