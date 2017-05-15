<?php
/**
 * User: Администратор
 * Date: 05.04.2017
 * Time: 23:30
 */
use frontend\components\menu12btns\Menu12Btns;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;

$items = [ ];
$extra_items = [ ];
$sub_category = [ ];
$i = 0;

/** @var $category Menu12Btns */
foreach ( $category as $value ) {
//print '<pre>';
//print_r($value);
//print '</pre>';
    if ( $i >= 6 ) {
        array_push( $extra_items, [
            'label' => Html::encode( $value['cat_name'] ),
            'url' =>  Url::to( [ 'show-category-page', 'id' => $value['cat_id'], 't' => 'cat' ] )
        ] );
    }
    else {

        foreach ( $value['subcategory'] as $val ) {
//            print $val.'<br>';
            array_push( $sub_category, [
                'label' => Html::encode( $val['sub_name'] ),
                'url'   => Url::to( [ 'show-category-page', 'id' => $val['sub_id'], 't' => 'sub' ] )
            ] );

        }
        unset( $val );

        array_push( $items, [
            'label' => Html::encode( $value['cat_name'] ),
            'items' => $sub_category
        ] );

        $sub_category = [ ];
    }

    $i++;
}
unset( $value );

array_push( $items, [ 'label' => 'Прочее', 'items' => $extra_items ] );

//print '<pre>';
//print_r($items);
//print '</pre>'; //exit;

echo Nav::widget( [
    'items'   => $items,
    'options' => [
        'class' => 'nav-tabs'
    ]
] );

?>
