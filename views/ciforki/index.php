<?php
/* @var $this yii\web\View */
use yii\widgets\Menu;
 use yii\helpers\VarDumper;
?>
<h1>ciforki/index</h1>

<?php

VarDumper::dump($model2,10,true);
echo Menu::widget([
    'items' => [
        // Important: you need to specify url as 'controller/action',
        // not just as 'controller' even if default action is used.
        ['label' => 'Home', ],
        // 'Products' menu item will be selected as long as the route is 'product/index'
        ['label' => 'Products', 'items' => [
//            ['label' => 'New Arrivals', 'items' => [
////                ['label' => 'Most Popular'],
////                ['label' => 'Most Popular'],
//            ]],
//            ['label' => 'Most Popular'],
        ]],
        ['label' => 'Login'],
    ],
]);
?>