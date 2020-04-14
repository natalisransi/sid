<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataStatusHubungan;

/**
 * DataStatusHubunganSearch represents the model behind the search form of `\backend\models\DataStatusHubungan`.
 */
class DataStatusHubunganSearch extends DataStatusHubungan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_hubungan_id'], 'integer'],
            [['status_hubungan_nama'], 'safe'],
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
        $query = DataStatusHubungan::find();

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
            'status_hubungan_id' => $this->status_hubungan_id,
        ]);

        $query->andFilterWhere(['like', 'status_hubungan_nama', $this->status_hubungan_nama]);

        return $dataProvider;
    }
}
