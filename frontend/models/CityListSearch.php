<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\CityList;

/**
 * CityListSearch represents the model behind the search form about `frontend\models\CityList`.
 */
class CityListSearch extends CityList
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_list_id', 'city_list_active', 'city_list_priority'], 'integer'],
            [['city_list_name', 'city_list_value'], 'safe'],
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
    public function search($params)
    {
        $query = CityList::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'city_list_id' => $this->city_list_id,
            'city_list_active' => $this->city_list_active,
            'city_list_priority' => $this->city_list_priority,
        ]);

        $query->andFilterWhere(['like', 'city_list_name', $this->city_list_name])
            ->andFilterWhere(['like', 'city_list_value', $this->city_list_value]);

        return $dataProvider;
    }
}
