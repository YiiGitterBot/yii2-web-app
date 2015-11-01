<?php

/* @var $this yii\web\View */
/* @var $achievements common\models\gitter\Achievements */

$this->title = Yii::t('app', 'Achievements');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-achievements">
    <div class="row">
        <?php foreach ($achievements as $achievement): ?>
            <?= $this->render('_achievement', ['achievement' => $achievement]) ?>
        <?php endforeach ?>
    </div>
</div>
