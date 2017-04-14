<?php
/**
 * User: Администратор
 * Date: 12.04.2017
 * Time: 22:42
 */

namespace frontend\models;


use yii\db\ActiveRecord;

class Adverts extends ActiveRecord
{
    public $ads;

    public static function getAds()
    {
        $ads = Adverts::find()->where( [ 'ad_active' => 1 ] )->limit( 10 )->all();
        return $ads;
    }

}