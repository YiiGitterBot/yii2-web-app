<?php

namespace common\models\gitter;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "UserAchievements".
 *
 * @property integer $id
 * @property integer $userId
 * @property integer $achievementId
 * @property integer $timestamp
 */
class UserAchievements extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'UserAchievements';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'achievementId', 'timestamp'], 'required'],
            [['userId', 'achievementId', 'timestamp'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'userId' => Yii::t('app', 'User ID'),
            'achievementId' => Yii::t('app', 'Achievement ID'),
            'timestamp' => Yii::t('app', 'Timestamp'),
        ];
    }
}
