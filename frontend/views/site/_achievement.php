<?php

/* @var $this yii\web\View */
/* @var $achievement common\models\gitter\Achievements */

use yii\bootstrap\Html;
?>
<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-body">
            <span class="label label-default pull-right"><?= Yii::t('app', '{n, plural, =0{So far nobody received} =1{One person received} other{# persons received}}', ['n' => count($achievement->userAchievements)]) ?></span>
            <p><?= Html::encode($achievement->title) ?></p>
            <small><?= Html::encode($achievement->description) ?></small>
        </div>
    </div>
</div>