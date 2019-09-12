<?php
namespace app\rbac;


use yii\helpers\VarDumper;
use yii\rbac\Rule;

/**
 * Проверяем authorID на соответствие с пользователем переданным через параметры
 */
class ManagerRule extends Rule
{
    public $name = 'isManager';

    /**
     * @param string|integer $user the user ID.
     * @param Item $item the role or permission that this rule is associated width
     * @param array $params parameters passed to ManagerInterface::checkAccess().
     * @return boolean a value indicating whether the rule permits the role or permission it is associated with.
     */
    public function execute($user, $item, $params)
    {
        print_r($params);
        die;
        return isset($params['post']) ? $params['post']->author_id == $user : false;

    }
}