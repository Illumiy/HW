<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_bok".
 *
 * @property int $bok_id
 * @property int $user_id
 *
 * @property Bok $bok
 * @property User $user
 */
class UserBok extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_bok';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bok_id', 'user_id'], 'required'],
            [['bok_id', 'user_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bok_id' => 'Bok ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBok()
    {
        return $this->hasOne(Bok::className(), ['id' => 'bok_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
