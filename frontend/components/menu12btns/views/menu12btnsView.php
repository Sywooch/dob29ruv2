<?php
/**
 * User: Администратор
 * Date: 05.04.2017
 * Time: 23:30
 */

use yii\bootstrap\Nav;

//print '<pre>';
//var_dump($category);
//print '</pre>'; exit;

/** @var $category */
echo Nav::widget( [
    'items'   => $category,
    'options' => [
        'class' => 'nav-tabs'
    ]
] );

?>
