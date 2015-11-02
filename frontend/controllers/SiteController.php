<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\gitter\Users;
use common\models\gitter\Achievements;

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
    public function actionGetUser() {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $query = Users::find()
            ->select(['username', 'carma', 'thanks', 'avatarUrlSmall'])
            ->orderBy('users.carma DESC')
            ->all();

        return $query;
    }

    /**
     * @inheritdoc
     */
    public function actionAchievements()
    {
        $achievements = Achievements::find()->all();

        return $this->render('achievements', [
            'achievements' => $achievements
        ]);
    }
}
