<?php
/**
 * User: Администратор
 * Date: 14.05.2017
 * Time: 15:23
 */

namespace console\controllers;

use yii;
use common\models\User;

class RbacController extends yii\console\Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll(); //удаляем старые данные
//        $rule = new UserRoleRule(); //Включаем наш обработчик
//        $auth->add( $rule );

        $viewAdminPage = $auth->createPermission( 'viewAdminPage' );
        $viewAdminPage->description = 'Просмотр админки';
        $auth->add( $viewAdminPage );

        $editAd = $auth->createPermission( 'editAd' );
        $editAd->description = 'Редактирование объявления';
        $auth->add( $editAd );

        $admin = $auth->createRole( 'admin' );
        $admin->description = 'Администратор';
//        $admin->ruleName = $rule->name;
        $auth->add( $admin );
        $auth->addChild( $admin, $viewAdminPage );
//        $auth->addChild( $admin, $editAd );

        $moder = $auth->createRole( 'moder' );
        $moder->description = 'Модератор';
//        $moder->ruleName = $rule->name;
        $auth->add( $moder );

        $user = $auth->createRole( 'user' );
        $user->description = 'Пользователь';
//        $user->ruleName = $rule->name;
        $auth->add( $user );
        $auth->addChild( $user, $editAd );
    }

    public function actionCreatePermission( $name, $description )
    {
        $auth = Yii::$app->authManager;
        $permission = $auth->createPermission( $name );
        $permission->description = $description;
        $auth->add( $permission );
    }

    public function actionCreateRole( $name )
    {
        $auth = Yii::$app->authManager;
        $role = $auth->createRole( $name );
        $auth->add( $role );
    }

    public function actionAssignRole( $username, $roleName )
    {
        $user = User::findByUsername( $username );
        $auth = Yii::$app->authManager;
        $role = $auth->getRole( $roleName );
        $auth->assign( $role, $user );
    }
}