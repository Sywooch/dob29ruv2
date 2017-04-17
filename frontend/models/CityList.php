<?php
/**
 * User: Администратор
 * Date: 15.04.2017
 * Time: 0:15
 */

namespace frontend\models;


use yii\db\ActiveRecord;

class CityList extends ActiveRecord
{
    public static function tableName()
    {
        return '{{citylist}}';
    }

    public function getAdverts()
    {
        return $this->hasOne( Adverts::className(), [ 'ad_city' => 'city_list_id' ] );
    }

}