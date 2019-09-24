<?php

namespace app\controllers;

use app\models\Ciforki;
use yii\helpers\VarDumper;


class CiforkiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $ciforki= new Ciforki;
        $ciforki->getMenu();
        return $this->render('index');
    }


}
