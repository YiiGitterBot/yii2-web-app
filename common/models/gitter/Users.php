<?php

namespace common\models\gitter;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "Users".
 *
 * @property integer $id
 * @property string $username
 * @property integer $lastMessageTimestamp
 * @property integer $carma
 * @property integer $thanks
 * @property string $avatarUrl
 */
class Users extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['lastMessageTimestamp', 'carma', 'thanks'], 'integer'],
            [['username'], 'string', 'max' => 128],
            [['avatarUrl'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'lastMessageTimestamp' => Yii::t('app', 'Last Message Timestamp'),
            'carma' => Yii::t('app', 'Carma'),
            'thanks' => Yii::t('app', 'Thanks'),
            'avatarUrl' => Yii::t('app', 'Avatar Url'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarmaHistorys()
    {
        return $this->hasOne(CarmaHistory::className(), ['id' => 'userId'])->inverseOf('Users');
    }

}
