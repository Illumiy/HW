<?php

namespace app\controllers;

class BokController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
