<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataProvinsi;

/**
 * DataProvinsiSearch represents the model behind the search form of `\backend\models\DataProvinsi`.
 */
class DataProvinsiSearch extends DataProvinsi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['provinsi_id'], 'integer'],
            [['provinsi_kode', 'provinsi_nama'], 'safe'],
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
        $query = DataProvinsi::find();

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
            'provinsi_id' => $this->provinsi_id,
        ]);

        $query->andFilterWhere(['like', 'provinsi_kode', $this->provinsi_kode])
            ->andFilterWhere(['like', 'provinsi_nama', $this->provinsi_nama]);

        return $dataProvider;
    }
}
