<?php

namespace app\models;

use yii;

/**
 * This is the model class for table "citylist".
 *
 * @property integer $city_list_id
 * @property string $city_list_name
 * @property string $city_list_value
 * @property integer $city_list_active
 * @property integer $city_list_priority
 */
class CityList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'citylist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_list_active', 'city_list_priority'], 'integer'],
            [['city_list_name', 'city_list_value'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'city_list_id' => 'City List ID',
            'city_list_name' => 'City List Name',
            'city_list_value' => 'City List Value',
            'city_list_active' => 'City List Active',
            'city_list_priority' => 'City List Priority',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdverts()
    {
        return $this->hasOne( Adverts::className(), [ 'ad_city' => 'city_list_id' ] );
    }
}
