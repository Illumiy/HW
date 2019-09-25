<?php

namespace app\controllers;

use app\models\Ciforki;
use yii\helpers\VarDumper;


class CiforkiController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $result = Ciforki::getMenu();
        return $this->render('index',['result'=>$result]);
    }


}
