<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataPekerjaan;

/**
 * DataPekerjaanSearch represents the model behind the search form of `\backend\models\DataPekerjaan`.
 */
class DataPekerjaanSearch extends DataPekerjaan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pekerjaan_id'], 'integer'],
            [['nama_pekerjaan'], 'safe'],
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
        $query = DataPekerjaan::find();

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
            'pekerjaan_id' => $this->pekerjaan_id,
        ]);

        $query->andFilterWhere(['like', 'nama_pekerjaan', $this->nama_pekerjaan]);

        return $dataProvider;
    }
}
