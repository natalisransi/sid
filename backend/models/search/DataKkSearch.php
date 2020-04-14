<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataKk;

/**
 * DataKkSearch represents the model behind the search form of `\backend\models\DataKk`.
 */
class DataKkSearch extends DataKk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['keluarga_id', 'dusun_rw_id'], 'integer'],
            [['keluarga_kode', 'keluarga_kk', 'alamat'], 'safe'],
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
        $query = DataKk::find();

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
            'keluarga_id' => $this->keluarga_id,
            'dusun_rw_id' => $this->dusun_rw_id,
        ]);

        $query->andFilterWhere(['like', 'keluarga_kode', $this->keluarga_kode])
            ->andFilterWhere(['like', 'keluarga_kk', $this->keluarga_kk])
            ->andFilterWhere(['like', 'alamat', $this->alamat]);

        return $dataProvider;
    }
}
