<?php
/**
 * User: Администратор
 * Date: 20.04.2017
 * Time: 12:08
 */

namespace frontend\models;


use frontend\components\menu12btns\Category;
use yii\db\ActiveRecord;
use frontend\components\menu12btns\Subcategory;
use yii\db\Query;

class Adverts extends ActiveRecord
{
    public static function tableName()
    {
        return 'adverts';
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public static function getAds()
    {
//        $subQuery = (new Query())->select('category.cat_name')->from('category')->where('subcategory.parent_id = category.cat_id');
//
//// SELECT `id`, (SELECT COUNT(*) FROM `user`) AS `count` FROM `post`
//        $query = (new Query())->select(['id', 'count' => $subQuery])->from('post');


        $ads = Adverts::find()
            ->asArray()
            ->joinWith( 'citylist' )
            ->joinWith( 'subcategory' )
//            ->select($subQuery)
            ->where( [ 'ad_active' => 1 ] )
            ->limit( 10 )
            ->orderBy( [ 'ad_id' => SORT_DESC ] )
            ->all();

        return $ads;
    }

    /**
     * @param $publicDate
     * @param $modification_date
     * @return bool|string
     */
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

//    public function getItems()
//    {
//        return $this->hasMany(Item::className(), ['id' => 'item_id'])
//            ->viaTable('order_item', ['order_id' => 'id']);
//    }

    public function getCategory()
    {
        return $this->hasMany( Category::className(), [ 'cat_id' => 'parent_id' ])
            ->viaTable('subcategory', ['sub_id' => 'ad_folder']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitylist()
    {
        return $this->hasMany( CityList::className(), [ 'city_list_id' => 'ad_city' ] );
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubcategory()
    {
        return $this->hasMany( Subcategory::className(), [ 'sub_id' => 'ad_folder' ] );
    }

}