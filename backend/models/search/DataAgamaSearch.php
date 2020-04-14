<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataAgama;

/**
 * DataAgamaSearch represents the model behind the search form of `\backend\models\DataAgama`.
 */
class DataAgamaSearch extends DataAgama
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['agama_id'], 'integer'],
            [['nama_agama'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = DataAgama::find();

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
            'agama_id' => $this->agama_id,
        ]);

        $query->andFilterWhere(['like', 'nama_agama', $this->nama_agama]);

        return $dataProvider;
    }
}
