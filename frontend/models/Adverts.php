<?php

namespace frontend\models;

use Yii;
use frontend\components\menu12btns\Category;
use frontend\components\menu12btns\Subcategory;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use yii\data\Pagination;

/**
 * This is the model class for table "adverts".
 *
 * @property integer $ad_id
 * @property string $ad_sid
 * @property integer $ad_folder
 * @property integer $ad_type
 * @property string $ad_header
 * @property string $ad_comment
 * @property integer $ad_city
 * @property integer $ad_price
 * @property integer $ad_currency
 * @property integer $ad_period
 * @property integer $ad_time
 * @property integer $ad_approved
 * @property integer $ad_active
 * @property integer $ad_placed
 * @property integer $ad_selected
 * @property integer $ad_selected_start
 * @property integer $ad_selected_dur
 * @property integer $ad_special
 * @property integer $ad_special_start
 * @property integer $ad_special_dur
 * @property integer $ad_image1
 * @property integer $ad_image2
 * @property integer $ad_image3
 * @property integer $ad_image4
 * @property integer $ad_image5
 * @property integer $ad_image6
 * @property integer $ad_userid
 * @property string $ad_username
 * @property string $ad_useremail
 * @property string $ad_userphone
 * @property string $ad_url
 * @property integer $ad_rate
 * @property integer $ad_viewday
 * @property integer $ad_viewweek
 * @property integer $ad_viewmonth
 * @property integer $ad_ipadress
 * @property integer $ad_ipproxyadress
 * @property integer $ad_sendviaemail
 * @property string $ad_customvalues
 * @property string $ad_pass
 * @property string $ad_imgdescription
 * @property string $ad_advhash
 * @property integer $ad_time_originated
 * @property integer $ad_sold
 * @property integer $ad_responses
 * @property string $ad_address
 * @property integer $ad_up
 * @property integer $ad_img
 * @property string $ad_email_real
 * @property integer $exist_adv_id
 */
class Adverts extends \yii\db\ActiveRecord
{
    const SHORT_COMMENTS_LENGHT = 140;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adverts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [ [ 'ad_folder',
                'ad_type',
                'ad_city',
                'ad_price',
                'ad_currency',
                'ad_period',
                'ad_time',
                'ad_approved',
                'ad_active',
                'ad_placed',
                'ad_selected',
                'ad_selected_start',
                'ad_selected_dur',
                'ad_special',
                'ad_special_start',
                'ad_special_dur',
                'ad_image1',
                'ad_image2',
                'ad_image3',
                'ad_image4',
                'ad_image5',
                'ad_image6',
                'ad_userid',
                'ad_rate',
                'ad_viewday',
                'ad_viewweek',
                'ad_viewmonth',
                'ad_ipadress',
                'ad_ipproxyadress',
                'ad_sendviaemail',
                'ad_time_originated',
                'ad_sold',
                'ad_responses',
                'ad_up',
                'ad_img',
                'exist_adv_id' ],
              'integer' ],
            [ [ 'ad_header',
                'ad_comment',
                'ad_customvalues',
                'ad_imgdescription',
                'ad_advhash',
                'ad_address' ],
              'string' ],
            [ [ 'ad_up',
                'ad_img' ],
              'required' ],
            [ [ 'ad_sid',
                'ad_pass' ],
              'string',
              'max' => 32 ],
            [ [ 'ad_username',
                'ad_useremail',
                'ad_url',
                'ad_email_real' ],
              'string',
              'max' => 100 ],
            [ [ 'ad_userphone' ],
              'string',
              'max' => 50 ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ad_id'              => 'Ad ID',
            'ad_sid'             => 'Ad Sid',
            'ad_folder'          => 'Ad Folder',
            'ad_type'            => 'Ad Type',
            'ad_header'          => 'Ad Header',
            'ad_comment'         => 'Ad Comment',
            'ad_city'            => 'Ad City',
            'ad_price'           => 'Ad Price',
            'ad_currency'        => 'Ad Currency',
            'ad_period'          => 'Ad Period',
            'ad_time'            => 'Ad Time',
            'ad_approved'        => 'Ad Approved',
            'ad_active'          => 'Ad Active',
            'ad_placed'          => 'Ad Placed',
            'ad_selected'        => 'Ad Selected',
            'ad_selected_start'  => 'Ad Selected Start',
            'ad_selected_dur'    => 'Ad Selected Dur',
            'ad_special'         => 'Ad Special',
            'ad_special_start'   => 'Ad Special Start',
            'ad_special_dur'     => 'Ad Special Dur',
            'ad_image1'          => 'Ad Image1',
            'ad_image2'          => 'Ad Image2',
            'ad_image3'          => 'Ad Image3',
            'ad_image4'          => 'Ad Image4',
            'ad_image5'          => 'Ad Image5',
            'ad_image6'          => 'Ad Image6',
            'ad_userid'          => 'Ad Userid',
            'ad_username'        => 'Ad Username',
            'ad_useremail'       => 'Ad Useremail',
            'ad_userphone'       => 'Ad Userphone',
            'ad_url'             => 'Ad Url',
            'ad_rate'            => 'Ad Rate',
            'ad_viewday'         => 'Ad Viewday',
            'ad_viewweek'        => 'Ad Viewweek',
            'ad_viewmonth'       => 'Ad Viewmonth',
            'ad_ipadress'        => 'Ad Ipadress',
            'ad_ipproxyadress'   => 'Ad Ipproxyadress',
            'ad_sendviaemail'    => 'Ad Sendviaemail',
            'ad_customvalues'    => 'Ad Customvalues',
            'ad_pass'            => 'Ad Pass',
            'ad_imgdescription'  => 'Ad Imgdescription',
            'ad_advhash'         => 'Ad Advhash',
            'ad_time_originated' => 'Ad Time Originated',
            'ad_sold'            => 'Ad Sold',
            'ad_responses'       => 'Ad Responses',
            'ad_address'         => 'Ad Address',
            'ad_up'              => 'Ad Up',
            'ad_img'             => 'Ad Img',
            'ad_email_real'      => 'Ad Email Real',
            'exist_adv_id'       => 'Exist Adv ID',
        ];
    }

    /**
     * @return array
     */
    public function getAds( $params )
    {
        $query = ( new \yii\db\Query() )
            ->select( [ '*' ] )
            ->from( 'adverts' )
            ->leftJoin( 'citylist', 'city_list_id = ad_city' )
            ->leftJoin( 'subcategory', 'sub_id =ad_folder' )
            ->innerJoin( 'category', 'parent_id = cat_id' )
            ->where( [ 'ad_active' => 1 ] )
            ->orderBy( [ 'ad_id' => SORT_DESC ] )
            ->all();

        $arrayProvider = new ArrayDataProvider([
            'allModels' => $query,
            'pagination' => [
                'pagesize' => 30,
            ],
        ]);

        $this->load( $params );

        if ( !$this->validate() ){
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $arrayProvider;
        }

        // grid filtering conditions
//        $query->andFilterWhere( [
//            'ad_id'              => $this->ad_id,
//            'ad_folder'          => $this->ad_folder,
//            'ad_type'            => $this->ad_type,
//            'ad_city'            => $this->ad_city,
//            'ad_price'           => $this->ad_price,
//            'ad_currency'        => $this->ad_currency,
//            'ad_period'          => $this->ad_period,
//            'ad_time'            => $this->ad_time,
//            'ad_approved'        => $this->ad_approved,
//            'ad_active'          => $this->ad_active,
//            'ad_placed'          => $this->ad_placed,
//            'ad_selected'        => $this->ad_selected,
//            'ad_selected_start'  => $this->ad_selected_start,
//            'ad_selected_dur'    => $this->ad_selected_dur,
//            'ad_special'         => $this->ad_special,
//            'ad_special_start'   => $this->ad_special_start,
//            'ad_special_dur'     => $this->ad_special_dur,
//            'ad_image1'          => $this->ad_image1,
//            'ad_image2'          => $this->ad_image2,
//            'ad_image3'          => $this->ad_image3,
//            'ad_image4'          => $this->ad_image4,
//            'ad_image5'          => $this->ad_image5,
//            'ad_image6'          => $this->ad_image6,
//            'ad_userid'          => $this->ad_userid,
//            'ad_rate'            => $this->ad_rate,
//            'ad_viewday'         => $this->ad_viewday,
//            'ad_viewweek'        => $this->ad_viewweek,
//            'ad_viewmonth'       => $this->ad_viewmonth,
//            'ad_ipadress'        => $this->ad_ipadress,
//            'ad_ipproxyadress'   => $this->ad_ipproxyadress,
//            'ad_sendviaemail'    => $this->ad_sendviaemail,
//            'ad_time_originated' => $this->ad_time_originated,
//            'ad_sold'            => $this->ad_sold,
//            'ad_responses'       => $this->ad_responses,
//            'ad_up'              => $this->ad_up,
//            'ad_img'             => $this->ad_img,
//            'exist_adv_id'       => $this->exist_adv_id,
//                        'city_list_name'    =>  $this->getCitylist(),
//            //            'parent_id'           => $this->getSubcategory(),
//            //            'sub_id'             => $this->getSubcategory()
//        ] );
//
//        $query->andFilterWhere( [ 'like',
//                                  'ad_sid',
//                                  $this->ad_sid ] )
//            ->andFilterWhere( [ 'like',
//                                'ad_header',
//                                $this->ad_header ] )
//            ->andFilterWhere( [ 'like',
//                                'ad_comment',
//                                $this->ad_comment ] )
//            ->andFilterWhere( [ 'like',
//                                'ad_username',
//                                $this->ad_username ] )
//            ->andFilterWhere( [ 'like',
//                                'ad_useremail',
//                                $this->ad_useremail ] )
//            ->andFilterWhere( [ 'like',
//                                'ad_userphone',
//                                $this->ad_userphone ] )
//            ->andFilterWhere( [ 'like',
//                                'ad_url',
//                                $this->ad_url ] )
//            ->andFilterWhere( [ 'like',
//                                'ad_customvalues',
//                                $this->ad_customvalues ] )
//            ->andFilterWhere( [ 'like',
//                                'ad_pass',
//                                $this->ad_pass ] )
//            ->andFilterWhere( [ 'like',
//                                'ad_imgdescription',
//                                $this->ad_imgdescription ] )
//            ->andFilterWhere( [ 'like',
//                                'ad_advhash',
//                                $this->ad_advhash ] )
//            ->andFilterWhere( [ 'like',
//                                'ad_address',
//                                $this->ad_address ] )
//            ->andFilterWhere( [ 'like',
//                                'ad_email_real',
//                                $this->ad_email_real ] );
//
        return $arrayProvider;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitylist()
    {
        return $this->hasMany( CityList::className(), [ 'city_list_id' => 'ad_city' ] );
    }

    public function getCategory()
    {
        return $this->hasMany( Category::className(), [ 'cat_id' => 'parent_id' ] )
            ->viaTable( 'subcategory s', [ 'parent_id' => 'ad_folder' ] );
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubcategory()
    {
        return $this->hasMany( Subcategory::className(), [ 'sub_id' => 'ad_folder' ] );
    }
}
