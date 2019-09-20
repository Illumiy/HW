<?php

namespace app\controllers;

use app\models\Ciforki;
use yii\helpers\VarDumper;


class CiforkiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $a = 0;
        $model = new ciforki;
        $name= ciforki::find()->asArray()->all();
        $model2 = $this->recursion($name, $a);
        return $this->render('index', [ 'model2' => $model2]);
    }

//    public static function recursion($name, $a)
//    {
//
//        $text = array();
//     if($name[$a][parent] == null){
//            $text = .$text. + .$name[$a].;
//
//        }
//
//        return $name;
//    }
    public static function recursion($name, $a)
    {

        $text = array();
        if($name[$a][parent] == null){

            $text = $text + $name[$a];
            recursion($text, $a++);
        }else{
        
        }
    }





}
