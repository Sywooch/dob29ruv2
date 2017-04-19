<?php
/**
 * User: Администратор
 * Date: 12.04.2017
 * Time: 22:42
 */

namespace frontend\models;

use yii;
use yii\db\ActiveRecord;
use frontend\components\menu12btns\Subcategory;

class Adverts extends ActiveRecord
{
    public static function tableName()
    {
        return '{{adverts}}';
    }

    public static function getAds()
    {
        $ads = Adverts::find()
            ->asArray()
            ->joinWith( 'citylist' )
            ->joinWith('subcategory')
            ->where( [ 'ad_active' => 1 ] )
            ->limit( 10 )
            ->orderBy( [ 'ad_id' => SORT_DESC ] )
            ->all();

        return $ads;
    }

    public static function publicationDay( $publicDate, $modification_date )
    {
        $date = date( "d-m-Y", $publicDate );
        $now = date( "d-m-Y", time() );
        $yesterday = date( "d-m-Y", time() - 86400 );
        $modification_date = date( "d-m-Y", $modification_date );
        if ( $now == $date ){
            $date = 'сегодня';
        } else if ( $yesterday == $date ){
            $date = 'вчера';
        }
        if ( $now == $modification_date ){
            $date = 'сегодня';
        } else if ( $yesterday == $modification_date ){
            $date = 'вчера';
        }
        return $date;
    }

    public function getCitylist()
    {
        return $this->hasMany( CityList::className(), [ 'city_list_id' => 'ad_city' ] );
    }

    public function getSubcategory()
    {
        return $this->hasMany( Subcategory::className(), [ 'sub_id' => 'ad_folder' ] );
    }


}