<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<div class="site-index" ng-controller="SearchController">
    <div class="form-group form-group-lg search">
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
            <input class="form-control" type="text" ng-model="searchFilter" placeholder="<?= Yii::t('app', 'Search by participants') ?>">
        </div>
    </div>

    <h1 class="text-center search-text" ng-hide="searchFilter"><?= Yii::t('app', 'Enter the user name') ?></h1>

    <div class="row" ng-cloak>

        <h1 class="text-center search-text" ng-show="(users | filter:{username: searchFilter}).length == 0"><?= Yii::t('app', 'On your request nothing has been found') ?></h1>

        <div class="col-md-4" ng-repeat="user in users | filter:{username: searchFilter}" ng-show="searchFilter">

            <div class="well well-sm">
                <div class="media">
                    <span class="label label-danger pull-right"><?= Yii::t('app', 'Carma') ?>: {{user.carma}}</span>
                    <div class="media-left">
                        <a href="#"><img class="media-object img-thumbnail user-pic" ng-src="{{user.avatarUrlSmall}}" alt="{{user.username}}"></a>
                    </div>
                    <div class="media-body media-middle">
                        <h4 class="media-heading">{{user.username}}</h4>
                        <p>
                            <a href="https://github.com/{{user.username}}" title="<?= Yii::t('app', 'Profile on GitHub.Com') ?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                            <a href="https://gitter.im/{{user.username}}" title="<?= Yii::t('app', 'Private message') ?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <?= Yii::t('app', 'Private message') ?></a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>