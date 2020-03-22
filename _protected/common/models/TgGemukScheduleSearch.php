<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TgGemukSchedule;

/**
 * TgGemukScheduleSearch represents the model behind the search form of `common\models\TgGemukSchedule`.
 */
class TgGemukScheduleSearch extends TgGemukSchedule
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['day_date', 'tg_gemuk_tioman', 'tioman_tg_gemuk'], 'safe'],
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
        $query = TgGemukSchedule::find();

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
            ->andFilterWhere(['like', 'tg_gemuk_tioman', $this->tg_gemuk_tioman])
            ->andFilterWhere(['like', 'tioman_tg_gemuk', $this->tioman_tg_gemuk]);

        return $dataProvider;
    }
}
