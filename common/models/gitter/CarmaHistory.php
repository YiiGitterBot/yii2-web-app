<?php

namespace app\commons\models\gitter;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "CarmaHistory".
 *
 * @property integer $id
 * @property integer $userId
 * @property integer $giverId
 * @property integer $timestamp
 * @property integer $type
 * @property string $message
 */
class CarmaHistory extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'CarmaHistory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId', 'giverId', 'timestamp', 'type'], 'required'],
            [['userId', 'giverId', 'timestamp', 'type'], 'integer'],
            [['message'], 'string']
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
            'giverId' => Yii::t('app', 'Giver ID'),
            'timestamp' => Yii::t('app', 'Timestamp'),
            'type' => Yii::t('app', 'Type'),
            'message' => Yii::t('app', 'Message'),
        ];
    }
}
