<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataDesaKelurahan;

/**
 * DataDesaKelurahanSearch represents the model behind the search form of `\backend\models\DataDesaKelurahan`.
 */
class DataDesaKelurahanSearch extends DataDesaKelurahan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['desa_kelurahan_id', 'kecamatan_id'], 'integer'],
            [['desa_kelurahan_kode', 'desa_kelurahan_nama'], 'safe'],
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
        $query = DataDesaKelurahan::find();

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
            'desa_kelurahan_id' => $this->desa_kelurahan_id,
            'kecamatan_id' => $this->kecamatan_id,
        ]);

        $query->andFilterWhere(['like', 'desa_kelurahan_kode', $this->desa_kelurahan_kode])
            ->andFilterWhere(['like', 'desa_kelurahan_nama', $this->desa_kelurahan_nama]);

        return $dataProvider;
    }
}
