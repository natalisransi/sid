<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataGolonganDarah;

/**
 * DataGolonganDarahSearch represents the model behind the search form of `\backend\models\DataGolonganDarah`.
 */
class DataGolonganDarahSearch extends DataGolonganDarah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['golongan_darah_id'], 'integer'],
            [['nama_golongan_darah'], 'safe'],
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
        $query = DataGolonganDarah::find();

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
            'golongan_darah_id' => $this->golongan_darah_id,
        ]);

        $query->andFilterWhere(['like', 'nama_golongan_darah', $this->nama_golongan_darah]);

        return $dataProvider;
    }
}
