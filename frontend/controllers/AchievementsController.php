<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\gitter\Achievements;

/**
 * Class AchievementsController
 * @package frontend\controllers
 */
class AchievementsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actionIndex()
    {
        $achievements = Achievements::find()
            ->with(['userAchievements'])
            ->all();

        return $this->render('index', [
            'achievements' => $achievements
        ]);
    }


}