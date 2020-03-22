<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MersingSchedule;

/**
 * MersingScheduleSearch represents the model behind the search form of `common\models\MersingSchedule`.
 */
class MersingScheduleSearch extends MersingSchedule
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['day_date', 'mersing_tioman', 'tioman_mersing'], 'safe'],
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
        $query = MersingSchedule::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'day_date', $this->day_date])
            ->andFilterWhere(['like', 'mersing_tioman', $this->mersing_tioman])
            ->andFilterWhere(['like', 'tioman_mersing', $this->tioman_mersing]);

        return $dataProvider;
    }
}
