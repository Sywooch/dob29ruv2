<?php
/**
 * User: Администратор
 * Date: 05.04.2017
 * Time: 23:19
 */

namespace frontend\components\menu12btns;

use yii;
use yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

class Menu12Btns extends Widget
{
    public $id;

    private $_category;
    private $_items = [ ];
    private $_extra_items = [ ];
    private $_sub_category = [ ];

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        parent::run(); print $this->id;

        return $this->render( 'menu12btnsView', [ 'category' => $this->getItems( $this->getCategory() ) ] );
    }

    /**
     * @return array|null|yii\db\ActiveRecord[]
     */
    private function getCategory()
    {
        $this->_category = Category::find()
            ->asArray()
            ->joinWith( 'subcategory' )
            ->all();

        if ( !$this->_category ) {
            return null;
        }
        return $this->_category;
    }

    private function getSubcategory( $id )
    {

    }

    /**
     * @param $array
     * @return array
     */
    private function getItems( $array )
    {
        $i = 0;

        foreach ( $array as $value ) {
            if ( $i >= 6 ) {
                array_push( $this->_extra_items, [
                    'label' => Html::encode( $value['cat_name'] ),
                    'url'   => Url::to( [ 'show-category-page', 'id' => $value['cat_id'], 't' => 'cat' ] )
                ] );
            }
            else {

                foreach ( $value['subcategory'] as $val ) {

                    array_push( $this->_sub_category, [
                        'label' => Html::encode( $val['sub_name'] ),
                        'url'   => Url::to( [ 'show-category-page', 'id' => $val['sub_id'], 't' => 'sub' ] )
                    ] );

                }
                unset( $val );

                array_push( $this->_items, [
                    'label' => Html::encode( $value['cat_name'] ),
                    'items' => $this->_sub_category
                ] );

                $this->_sub_category = [ ];
            }

            $i++;
        }
        unset( $value );

        array_push( $this->_items, [ 'label' => 'Прочее', 'items' => $this->_extra_items ] );

        return $this->_items;
    }
}