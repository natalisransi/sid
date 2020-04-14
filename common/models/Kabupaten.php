<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kabupaten".
 *
 * @property int $kabupaten_id
 * @property string $kabupaten_kode
 * @property string $kabupaten_nama
 * @property int $provinsi_provinsi_id
 *
 * @property Provinsi $provinsiProvinsi
 * @property Kecamatan[] $kecamatans
 */
class Kabupaten extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kabupaten';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kabupaten_kode', 'kabupaten_nama', 'provinsi_provinsi_id'], 'required'],
            [['provinsi_provinsi_id'], 'integer'],
            [['kabupaten_kode', 'kabupaten_nama'], 'string', 'max' => 45],
            [['kabupaten_kode'], 'unique'],
            [['provinsi_provinsi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Provinsi::className(), 'targetAttribute' => ['provinsi_provinsi_id' => 'provinsi_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kabupaten_id' => 'Kabupaten ID',
            'kabupaten_kode' => 'Kabupaten Kode',
            'kabupaten_nama' => 'Kabupaten Nama',
            'provinsi_provinsi_id' => 'Provinsi Provinsi ID',
        ];
    }

    /**
     * Gets query for [[ProvinsiProvinsi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProvinsiProvinsi()
    {
        return $this->hasOne(Provinsi::className(), ['provinsi_id' => 'provinsi_provinsi_id']);
    }

    /**
     * Gets query for [[Kecamatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKecamatans()
    {
        return $this->hasMany(Kecamatan::className(), ['kabupaten_kabupaten_id' => 'kabupaten_id']);
    }
}
