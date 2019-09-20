<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ciforki".
 *
 * @property int $id
 * @property string $name
 * @property int $parent
 *
 * @property Ciforki $parent0
 * @property Ciforki[] $ciforkis
 */
class Ciforki extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ciforki';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['parent'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['parent'], 'exist', 'skipOnError' => true, 'targetClass' => Ciforki::className(), 'targetAttribute' => ['parent' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'parent' => 'Parent',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent0()
    {
        return $this->hasOne(Ciforki::className(), ['id' => 'parent']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCiforkis()
    {
        return $this->hasMany(Ciforki::className(), ['parent' => 'id']);
    }
}
