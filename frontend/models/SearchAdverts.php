<?php

namespace frontend\models;

use frontend\models\Adverts;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;

/**
 * SearchAdverts represents the model behind the search form about `frontend\models\Adverts`.
 */
class SearchAdverts extends Adverts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [ [ 'ad_id',
                'ad_folder',
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
            [ [ 'ad_sid',
                'ad_header',
                'ad_comment',
                'ad_username',
                'ad_useremail',
                'ad_userphone',
                'ad_url',
                'ad_customvalues',
                'ad_pass',
                'ad_imgdescription',
                'ad_advhash',
                'ad_address',
                'ad_email_real' ],
              'safe' ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search( $params )
    {

        $query = Adverts::find();
//            ->joinWith( 'citylist', true, 'LEFT JOIN' )
//            ->joinWith( 'subcategory', true, 'LEFT JOIN' )
//            ->joinWith( 'category', true, 'INNER JOIN' )
//            ->where( [ 'ad_active' => 1 ] )
//            ->orderBy( [ 'ad_id' => SORT_DESC ] );
//            ->all();

        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

//        var_dump($query);
//        var_dump( $models);

    // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider( [
            'query'      => $query,
            'pagination' => [
                'pagesize' => 30,
            ],
        ] );

        $this->load( $params );

        if ( !$this->validate() ){
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere( [
            'ad_id'              => $this->ad_id,
            'ad_folder'          => $this->ad_folder,
            'ad_type'            => $this->ad_type,
            'ad_city'            => $this->ad_city,
            'ad_price'           => $this->ad_price,
            'ad_currency'        => $this->ad_currency,
            'ad_period'          => $this->ad_period,
            'ad_time'            => $this->ad_time,
            'ad_approved'        => $this->ad_approved,
            'ad_active'          => $this->ad_active,
            'ad_placed'          => $this->ad_placed,
            'ad_selected'        => $this->ad_selected,
            'ad_selected_start'  => $this->ad_selected_start,
            'ad_selected_dur'    => $this->ad_selected_dur,
            'ad_special'         => $this->ad_special,
            'ad_special_start'   => $this->ad_special_start,
            'ad_special_dur'     => $this->ad_special_dur,
            'ad_image1'          => $this->ad_image1,
            'ad_image2'          => $this->ad_image2,
            'ad_image3'          => $this->ad_image3,
            'ad_image4'          => $this->ad_image4,
            'ad_image5'          => $this->ad_image5,
            'ad_image6'          => $this->ad_image6,
            'ad_userid'          => $this->ad_userid,
            'ad_rate'            => $this->ad_rate,
            'ad_viewday'         => $this->ad_viewday,
            'ad_viewweek'        => $this->ad_viewweek,
            'ad_viewmonth'       => $this->ad_viewmonth,
            'ad_ipadress'        => $this->ad_ipadress,
            'ad_ipproxyadress'   => $this->ad_ipproxyadress,
            'ad_sendviaemail'    => $this->ad_sendviaemail,
            'ad_time_originated' => $this->ad_time_originated,
            'ad_sold'            => $this->ad_sold,
            'ad_responses'       => $this->ad_responses,
            'ad_up'              => $this->ad_up,
            'ad_img'             => $this->ad_img,
            'exist_adv_id'       => $this->exist_adv_id,
//            'city_list_name'    =>  $this->getCitylist(),
//            'parent_id'           => $this->getSubcategory(),
//            'sub_id'             => $this->getSubcategory()
        ] );

        $query->andFilterWhere( [ 'like',
                                  'ad_sid',
                                  $this->ad_sid ] )
            ->andFilterWhere( [ 'like',
                                'ad_header',
                                $this->ad_header ] )
            ->andFilterWhere( [ 'like',
                                'ad_comment',
                                $this->ad_comment ] )
            ->andFilterWhere( [ 'like',
                                'ad_username',
                                $this->ad_username ] )
            ->andFilterWhere( [ 'like',
                                'ad_useremail',
                                $this->ad_useremail ] )
            ->andFilterWhere( [ 'like',
                                'ad_userphone',
                                $this->ad_userphone ] )
            ->andFilterWhere( [ 'like',
                                'ad_url',
                                $this->ad_url ] )
            ->andFilterWhere( [ 'like',
                                'ad_customvalues',
                                $this->ad_customvalues ] )
            ->andFilterWhere( [ 'like',
                                'ad_pass',
                                $this->ad_pass ] )
            ->andFilterWhere( [ 'like',
                                'ad_imgdescription',
                                $this->ad_imgdescription ] )
            ->andFilterWhere( [ 'like',
                                'ad_advhash',
                                $this->ad_advhash ] )
            ->andFilterWhere( [ 'like',
                                'ad_address',
                                $this->ad_address ] )
            ->andFilterWhere( [ 'like',
                                'ad_email_real',
                                $this->ad_email_real ] );

        return $dataProvider;
    }
}
