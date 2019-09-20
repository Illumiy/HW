<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shutka_of_day".
 *
 * @property int $id
 * @property string $Body
 */
class ShutkaOfDay extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shutka_of_day';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Body'], 'required'],
            [['Body'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Body' => 'Body',
        ];
    }
}
