<?php
/**
 * User: Администратор
 * Date: 05.04.2017
 * Time: 23:30
 */
use app\components\menu12btns\Menu12Btns;
use yii\helpers\Html;
use yii\bootstrap\Tabs;

$items = array();
$extra_items = array();
$sub_category = array();
$i = 0;

/** @var $category Menu12Btns */
foreach( $category as $value ){

    if ( $i>=6 ){
        array_push( $extra_items, [ 'label'   => Html::encode( $value['cat_name'] ),
                                    'content' => 'extra_content' ] );
    } else {

        foreach( $value['subcategory'] as $val ){
            array_push( $sub_category, array(
                'label'   => Html::encode( $val['sub_name'] ),
                'content' => 'sub_category'
            ) );

        }
        unset( $val );

        array_push( $items, array(
            'label' => Html::encode( $value['cat_name'] ),
            'items' => $sub_category
        ) );

        $sub_category = array();

    }

    $i++;
}
unset( $value );

array_push( $items, [ 'label' => 'Прочее',
                      'items' => $extra_items ] );

echo Tabs::widget( [
    'items' => $items
] );

?>
