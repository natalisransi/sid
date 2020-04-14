<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataJenisSurat;

/**
 * DataJenisSuratSearch represents the model behind the search form of `\backend\models\DataJenisSurat`.
 */
class DataJenisSuratSearch extends DataJenisSurat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_surat_id'], 'integer'],
            [['jenis_surat_nama', 'pengantar', 'penutup', 'an_ttd'], 'safe'],
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
        $query = DataJenisSurat::find();

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
            'jenis_surat_id' => $this->jenis_surat_id,
        ]);

        $query->andFilterWhere(['like', 'jenis_surat_nama', $this->jenis_surat_nama])
            ->andFilterWhere(['like', 'pengantar', $this->pengantar])
            ->andFilterWhere(['like', 'penutup', $this->penutup])
            ->andFilterWhere(['like', 'an_ttd', $this->an_ttd]);

        return $dataProvider;
    }
}
