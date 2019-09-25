<?php

namespace app\models;

use Yii;
use yii\helpers\VarDumper;

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


    $res=Ciforki::getMenuRecrusive(1,0);
        VarDumper::dump($res,10,true);
      //  return $result;
    }

    public static function getMenuRecrusive($parent,$flag=0,$N=0,$result=[])
    {
    if($flag==0) {
        $items = Ciforki::find()
            ->where(['parent' => $parent])
            ->asArray()
            ->all();
        $N=0;
        static::getMenuRecrusive($items,1,$N,$result);
        return null;
    }elseif($flag==1 && $N<count($parent)){
        $result[] = [
            'label' => $parent[$N]['name'],
            'url' => ['#'],
            '<li class="divider"></li>',
        ];
        echo '----------------ИУАЩКУ:';
        VarDumper::dump($result,10,true);
        $N++;

        static::getMenuRecrusive($parent,$flag,$N,$result);
        return null;
        echo '----------------AFTER:';
        VarDumper::dump($result,10,true);

    }else{
        echo '----------------END:';
        VarDumper::dump($result,10,true);
        return $result;
    }
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
