<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "perangkat_desa".
 *
 * @property int $perangkat_desa_id
 * @property int $anggota_keluarga_id
 * @property int $jenis_perangkat_id
 * @property string|null $status
 * @property string|null $tgl_lantik
 * @property string|null $tgl_berhenti
 * @property string|null $no_sk_lantik
 * @property string|null $no_sk_berhenti
 * @property string|null $file_sk_lantik
 * @property string|null $file_sk_berhenti
 *
 * @property AnggotaKeluarga $anggotaKeluarga
 * @property JenisPerangkat $jenisPerangkat
 * @property Surat[] $surats
 */
class PerangkatDesa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perangkat_desa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['anggota_keluarga_id', 'jenis_perangkat_id'], 'required'],
            [['anggota_keluarga_id', 'jenis_perangkat_id'], 'integer'],
            [['status'], 'string'],
            [['tgl_lantik', 'tgl_berhenti'], 'safe'],
            [['no_sk_lantik', 'no_sk_berhenti', 'file_sk_berhenti'], 'string', 'max' => 45],
            [['file_sk_lantik'], 'string', 'max' => 145],
            [['anggota_keluarga_id'], 'exist', 'skipOnError' => true, 'targetClass' => AnggotaKeluarga::className(), 'targetAttribute' => ['anggota_keluarga_id' => 'anggota_keluarga_id']],
            [['jenis_perangkat_id'], 'exist', 'skipOnError' => true, 'targetClass' => JenisPerangkat::className(), 'targetAttribute' => ['jenis_perangkat_id' => 'jenis_perangkat_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'perangkat_desa_id' => 'Perangkat Desa ID',
            'anggota_keluarga_id' => 'Anggota Keluarga ID',
            'jenis_perangkat_id' => 'Jenis Perangkat ID',
            'status' => 'Status',
            'tgl_lantik' => 'Tgl Lantik',
            'tgl_berhenti' => 'Tgl Berhenti',
            'no_sk_lantik' => 'No Sk Lantik',
            'no_sk_berhenti' => 'No Sk Berhenti',
            'file_sk_lantik' => 'File Sk Lantik',
            'file_sk_berhenti' => 'File Sk Berhenti',
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
     * Gets query for [[JenisPerangkat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenisPerangkat()
    {
        return $this->hasOne(JenisPerangkat::className(), ['jenis_perangkat_id' => 'jenis_perangkat_id']);
    }

    /**
     * Gets query for [[Surats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurats()
    {
        return $this->hasMany(Surat::className(), ['perangkat_desa_id' => 'perangkat_desa_id']);
    }
}
