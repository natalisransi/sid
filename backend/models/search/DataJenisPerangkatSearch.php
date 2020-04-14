<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataJenisPerangkat;

/**
 * DataJenisPerangkatSearch represents the model behind the search form of `\backend\models\DataJenisPerangkat`.
 */
class DataJenisPerangkatSearch extends DataJenisPerangkat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_perangkat_id'], 'integer'],
            [['nama_perangkat'], 'safe'],
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
        $query = DataJenisPerangkat::find();

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
            'jenis_perangkat_id' => $this->jenis_perangkat_id,
        ]);

        $query->andFilterWhere(['like', 'nama_perangkat', $this->nama_perangkat]);

        return $dataProvider;
    }
}
