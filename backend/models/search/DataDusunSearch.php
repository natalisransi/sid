<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataDusun;

/**
 * DataDusunSearch represents the model behind the search form of `\backend\models\DataDusun`.
 */
class DataDusunSearch extends DataDusun
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dusun_rw_id', 'desa_kelurahan_id'], 'integer'],
            [['dusun_rw_kode', 'dusun_rw_nama'], 'safe'],
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
        $query = DataDusun::find();

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
            'dusun_rw_id' => $this->dusun_rw_id,
            'desa_kelurahan_id' => $this->desa_kelurahan_id,
        ]);

        $query->andFilterWhere(['like', 'dusun_rw_kode', $this->dusun_rw_kode])
            ->andFilterWhere(['like', 'dusun_rw_nama', $this->dusun_rw_nama]);

        return $dataProvider;
    }
}
