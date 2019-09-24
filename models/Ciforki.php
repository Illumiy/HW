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


    public static function getMenu()
    {
        $flag=0;
        $role_id = 1;
        $result = static::getMenuRecrusive($role_id,$flag);
        return $result;
    }

    private static function getMenuRecrusive($parent,$flag=0)
    {
    if($flag==0) {
        $items = ciforki::find()
            ->where(['parent' => $parent])
            ->asArray()
            ->all();
        print_r($items);
        die;
        $result = [];
        $flag=1;
        static::getMenuRecrusive($items,$flag);
    }
    elseif($flag==1){

        $result[] = [
            'label' => $parent['name'],
            'url' => ['#'],
            'items' => static::getMenuRecrusive($item['id']),
            '<li class="divider"></li>',
        ];
    }


        return $result;
    }



//        foreach ($items as $item) {
//        $result[] = [
//        'label' => $item['c_name'],
//        'url' => ['#'],
//        'items' => static::getMenuRecrusive($item['id']),
//        '<li class="divider"></li>',
//        ];
//        }

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
