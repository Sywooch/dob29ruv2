<?php
/**
 * User: Администратор
 * Date: 05.04.2017
 * Time: 23:19
 */

namespace frontend\components\menu12btns;

use yii;
use yii\bootstrap\Widget;

class Menu12Btns extends Widget
{
    public $user;
    private $category;
    private $query;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        parent::run();

        return $this->render( 'menu12btnsView', [ 'category' => $this->getCategory() ] );
    }

    private function getCategory()
    {
        $this->category = Category::find()
            ->asArray()
            ->joinWith( 'subcategory' )
            ->all();

        if ( !$this->category ) {
            return null;
        }
        return $this->category;
    }
}