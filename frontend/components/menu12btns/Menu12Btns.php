<?php
/**
 * User: Администратор
 * Date: 05.04.2017
 * Time: 23:19
 */

namespace frontend\components\menu12btns;


use Yii;
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
        $this->query = Category::find()->asArray();
        $this->category = $this->query->joinWith( 'subcategory')->all();

        if ( !$this->category ){
            return NULL;
        }
        return $this->category;
    }
}