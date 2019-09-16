<?php
namespace app\rbac;
use yii\helpers\VarDumper;
use yii\rbac\Rule;
/**
 * Проверяем authorID на соответствие с пользователем, переданным через параметры
 */

class ManagerRule extends Rule
{
    public $name = 'isAuthor';

    public function execute($user, $item, $params)
    {
        //  var_dump($params);
        if (\Yii::$app->user->can('admin')){
            return true;
        }
        return isset($params['post']) ? $params['post']->author_id == $user : false;
    }
}
