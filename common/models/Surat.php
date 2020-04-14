<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "surat".
 *
 * @property int $surat_id
 * @property string $surat_nomor
 * @property int $jenis_surat_id
 * @property string|null $tgl_surat
 * @property int $perangkat_desa_id
 * @property int $anggota_keluarga_id
 *
 * @property AnggotaKeluarga $anggotaKeluarga
 * @property JenisSurat $jenisSurat
 * @property PerangkatDesa $perangkatDesa
 */
class Surat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surat_nomor', 'jenis_surat_id', 'perangkat_desa_id', 'anggota_keluarga_id'], 'required'],
            [['jenis_surat_id', 'perangkat_desa_id', 'anggota_keluarga_id'], 'integer'],
            [['surat_nomor', 'tgl_surat'], 'string', 'max' => 45],
            [['surat_nomor'], 'unique'],
            [['anggota_keluarga_id'], 'exist', 'skipOnError' => true, 'targetClass' => AnggotaKeluarga::className(), 'targetAttribute' => ['anggota_keluarga_id' => 'anggota_keluarga_id']],
            [['jenis_surat_id'], 'exist', 'skipOnError' => true, 'targetClass' => JenisSurat::className(), 'targetAttribute' => ['jenis_surat_id' => 'jenis_surat_id']],
            [['perangkat_desa_id'], 'exist', 'skipOnError' => true, 'targetClass' => PerangkatDesa::className(), 'targetAttribute' => ['perangkat_desa_id' => 'perangkat_desa_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'surat_id' => 'Surat ID',
            'surat_nomor' => 'Surat Nomor',
            'jenis_surat_id' => 'Jenis Surat ID',
            'tgl_surat' => 'Tgl Surat',
            'perangkat_desa_id' => 'Perangkat Desa ID',
            'anggota_keluarga_id' => 'Anggota Keluarga ID',
        ];
    }

    /**
     * Gets query for [[AnggotaKeluarga]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnggotaKeluarga()
    {
        return $this->hasOne(AnggotaKeluarga::className(), ['anggota_keluarga_id' => 'anggota_keluarga_id']);
    }

    /**
     * Gets query for [[JenisSurat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenisSurat()
    {
        return $this->hasOne(JenisSurat::className(), ['jenis_surat_id' => 'jenis_surat_id']);
    }

    /**
     * Gets query for [[PerangkatDesa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerangkatDesa()
    {
        return $this->hasOne(PerangkatDesa::className(), ['perangkat_desa_id' => 'perangkat_desa_id']);
    }
}
