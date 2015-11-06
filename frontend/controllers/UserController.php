<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\gitter\Users;

/**
 * Class UserController
 * @package frontend\controllers
 */
class UserController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actionGetUser() {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        $query = Users::find()
            ->select(['username', 'carma', 'thanks', 'avatarUrl'])
            ->orderBy('carma DESC')
            ->all();

        return $query;
    }
}