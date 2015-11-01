<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * Class SiteController
 * @package frontend\controllers
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction'
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @inheritdoc
     */
    public function actionAchievements()
    {
        return $this->render('achievements');
    }
}
