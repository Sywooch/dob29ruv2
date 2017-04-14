<?php
namespace frontend\components\sitesearch;

use yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\components\sitesearch\SearchForm;

/**
 * User: Администратор
 * Date: 03.04.2017
 * Time: 21:17
 */
class SiteSearch extends Widget
{
    public function init()
    {
        parent::init();

    }

    public function run()
    {
        parent::run();

        return $this->render( 'siteSearchView' );
    }
}

?>