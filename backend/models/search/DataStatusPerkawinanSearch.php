<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataStatusPerkawinan;

/**
 * DataStatusPerkawinanSearch represents the model behind the search form of `\backend\models\DataStatusPerkawinan`.
 */
class DataStatusPerkawinanSearch extends DataStatusPerkawinan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_perkawinan_id'], 'integer'],
            [['nama_status_perkawinan'], 'safe'],
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
        $query = DataStatusPerkawinan::find();

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
            'status_perkawinan_id' => $this->status_perkawinan_id,
        ]);

        $query->andFilterWhere(['like', 'nama_status_perkawinan', $this->nama_status_perkawinan]);

        return $dataProvider;
    }
}
