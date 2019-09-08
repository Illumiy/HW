<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php if(Yii::$app->user->isGuest){
echo '<p>Тольок зарегестрированные пользователи могут покупать книгу<a class="btn btn-lg btn-success" href="'. Url::toRoute('/user/registration/register').'">Регистрация</a></p>';
}else{
    echo '<p><a class="btn btn-lg btn-success" href="'.Url::toRoute('/site/kupit').'">Купить книгу</a></p>
    <p><a class="btn btn-lg btn-success" href="'.Url::toRoute('/user/admin/deletemolodec').'">Удалить книгу</a></p>';
}?>
