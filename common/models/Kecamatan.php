<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kecamatan".
 *
 * @property int $kecamatan_id
 * @property string $kecamatan_kode
 * @property string $kecamatan_nama
 * @property int $kabupaten_kabupaten_id
 *
 * @property DesaKelurahan[] $desaKelurahans
 * @property Kabupaten $kabupatenKabupaten
 */
class Kecamatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kecamatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kecamatan_kode', 'kecamatan_nama', 'kabupaten_kabupaten_id'], 'required'],
            [['kabupaten_kabupaten_id'], 'integer'],
            [['kecamatan_kode', 'kecamatan_nama'], 'string', 'max' => 45],
            [['kecamatan_kode'], 'unique'],
            [['kabupaten_kabupaten_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kabupaten::className(), 'targetAttribute' => ['kabupaten_kabupaten_id' => 'kabupaten_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kecamatan_id' => 'Kecamatan ID',
            'kecamatan_kode' => 'Kecamatan Kode',
            'kecamatan_nama' => 'Kecamatan Nama',
            'kabupaten_kabupaten_id' => 'Kabupaten Kabupaten ID',
        ];
    }

    /**
     * Gets query for [[DesaKelurahans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDesaKelurahans()
    {
        return $this->hasMany(DesaKelurahan::className(), ['kecamatan_id' => 'kecamatan_id']);
    }

    /**
     * Gets query for [[KabupatenKabupaten]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKabupatenKabupaten()
    {
        return $this->hasOne(Kabupaten::className(), ['kabupaten_id' => 'kabupaten_kabupaten_id']);
    }
}
