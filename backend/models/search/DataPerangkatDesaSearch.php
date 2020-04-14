<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataPerangkatDesa;

/**
 * DataPerangkatDesaSearch represents the model behind the search form of `\backend\models\DataPerangkatDesa`.
 */
class DataPerangkatDesaSearch extends DataPerangkatDesa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['perangkat_desa_id', 'anggota_keluarga_id', 'jenis_perangkat_id'], 'integer'],
            [['status', 'tgl_lantik', 'tgl_berhenti', 'no_sk_lantik', 'no_sk_berhenti', 'file_sk_lantik', 'file_sk_berhenti'], 'safe'],
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
        $query = DataPerangkatDesa::find();

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
            'perangkat_desa_id' => $this->perangkat_desa_id,
            'anggota_keluarga_id' => $this->anggota_keluarga_id,
            'jenis_perangkat_id' => $this->jenis_perangkat_id,
            'tgl_lantik' => $this->tgl_lantik,
            'tgl_berhenti' => $this->tgl_berhenti,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'no_sk_lantik', $this->no_sk_lantik])
            ->andFilterWhere(['like', 'no_sk_berhenti', $this->no_sk_berhenti])
            ->andFilterWhere(['like', 'file_sk_lantik', $this->file_sk_lantik])
            ->andFilterWhere(['like', 'file_sk_berhenti', $this->file_sk_berhenti]);

        return $dataProvider;
    }
}
