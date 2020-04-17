<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DataPenduduk;

/**
 * DataPendudukSearch represents the model behind the search form of `\backend\models\DataPenduduk`.
 */
class DataPendudukSearch extends DataPenduduk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['anggota_keluarga_id', 'keluarga_id', 'agama_id', 'pendidikan_id', 'pekerjaan_id', 'golongan_darah_id', 'status_perkawinan_id', 'status_hubungan_status_hubungan_id'], 'integer'],
            [['nik', 'nama', 'gelar_depan', 'gelar_belakang', 'jenis_kelamin', 'tempat_lahir', 'tgl_perkawinan', 'no_paspor', 'no_kitap', 'ayah', 'ibu'], 'safe'],
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
        $query = DataPenduduk::find();

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
            'anggota_keluarga_id' => $this->anggota_keluarga_id,
            'keluarga_id' => $this->keluarga_id,
            'agama_id' => $this->agama_id,
            'pendidikan_id' => $this->pendidikan_id,
            'pekerjaan_id' => $this->pekerjaan_id,
            'golongan_darah_id' => $this->golongan_darah_id,
            'status_perkawinan_id' => $this->status_perkawinan_id,
            'tgl_perkawinan' => $this->tgl_perkawinan,
            'status_hubungan_status_hubungan_id' => $this->status_hubungan_status_hubungan_id,
        ]);

        $query->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'gelar_depan', $this->gelar_depan])
            ->andFilterWhere(['like', 'gelar_belakang', $this->gelar_belakang])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'no_paspor', $this->no_paspor])
            ->andFilterWhere(['like', 'no_kitap', $this->no_kitap])
            ->andFilterWhere(['like', 'ayah', $this->ayah])
            ->andFilterWhere(['like', 'ibu', $this->ibu]);

        return $dataProvider;
    }
}
