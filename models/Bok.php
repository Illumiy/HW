<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bok".
 *
 * @property int $id
 * @property string $Name
 * @property int $author_id
 *
 * @property Author $author
 * @property UserBok $id0
 */
class Bok extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bok';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'author_id'], 'required'],
            [['author_id'], 'integer'],
            [['Name'], 'string', 'max' => 255],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => UserBok::className(), 'targetAttribute' => ['id' => 'bok_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Name',
            'author_id' => 'Author ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'author_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(UserBok::className(), ['bok_id' => 'id']);
    }
}
