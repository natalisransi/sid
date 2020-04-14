<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataPendidikan;

/**
 * DataPendidikanSearch represents the model behind the search form of `\backend\models\DataPendidikan`.
 */
class DataPendidikanSearch extends DataPendidikan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pendidikan_id'], 'integer'],
            [['nama_pendidikan'], 'safe'],
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
        $query = DataPendidikan::find();

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
            'pendidikan_id' => $this->pendidikan_id,
        ]);

        $query->andFilterWhere(['like', 'nama_pendidikan', $this->nama_pendidikan]);

        return $dataProvider;
    }
}
