<?php

namespace common\models\gitter;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "Achievements".
 *
 * @property integer $id
 * @property string $key
 * @property string $title
 * @property string $description
 * @property string $chatAnnounce
 *
 * @property UserAchievements[] $userAchievements
 */
class Achievements extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Achievements';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['key', 'title', 'chatAnnounce'], 'required'],
            [['description', 'chatAnnounce'], 'string'],
            [['key'], 'string', 'max' => 64],
            [['title'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'key' => Yii::t('app', 'Key'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'chatAnnounce' => Yii::t('app', 'Chat Announce')
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserAchievements()
    {
        return $this->hasMany(UserAchievements::className(), ['userId' => 'id']);
    }
}
