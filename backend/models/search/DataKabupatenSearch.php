<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataKabupaten;

/**
 * DataKabupatenSearch represents the model behind the search form of `\backend\models\DataKabupaten`.
 */
class DataKabupatenSearch extends DataKabupaten
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kabupaten_id', 'provinsi_provinsi_id'], 'integer'],
            [['kabupaten_kode', 'kabupaten_nama'], 'safe'],
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
        $query = DataKabupaten::find();

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
            'kabupaten_id' => $this->kabupaten_id,
            'provinsi_provinsi_id' => $this->provinsi_provinsi_id,
        ]);

        $query->andFilterWhere(['like', 'kabupaten_kode', $this->kabupaten_kode])
            ->andFilterWhere(['like', 'kabupaten_nama', $this->kabupaten_nama]);

        return $dataProvider;
    }
}
