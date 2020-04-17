<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "anggota_keluarga".
 *
 * @property int $anggota_keluarga_id
 * @property string $nik
 * @property string $nama
 * @property int $keluarga_id
 * @property string|null $gelar_depan
 * @property string|null $gelar_belakang
 * @property string $jenis_kelamin
 * @property string|null $tempat_lahir
 * @property string|null $tgl_lahir
 * @property int $agama_id
 * @property int|null $pendidikan_id
 * @property int|null $pekerjaan_id
 * @property int|null $golongan_darah_id
 * @property int|null $status_perkawinan_id
 * @property string|null $tgl_perkawinan
 * @property int $status_hubungan_status_hubungan_id
 * @property string|null $no_paspor
 * @property string|null $no_kitap
 * @property string|null $ayah
 * @property string|null $ibu
 *
 * @property Agama $agama
 * @property GolonganDarah $golonganDarah
 * @property Keluarga $keluarga
 * @property Pekerjaan $pekerjaan
 * @property Pendidikan $pendidikan
 * @property StatusHubungan $statusHubunganStatusHubungan
 * @property StatusPerkawinan $statusPerkawinan
 * @property PerangkatDesa[] $perangkatDesas
 * @property Surat[] $surats
 */
class AnggotaKeluarga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anggota_keluarga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nik', 'nama', 'keluarga_id', 'jenis_kelamin', 'agama_id', 'status_hubungan_status_hubungan_id'], 'required'],
            [['keluarga_id', 'agama_id', 'pendidikan_id', 'pekerjaan_id', 'golongan_darah_id', 'status_perkawinan_id', 'status_hubungan_status_hubungan_id'], 'integer'],
            [['jenis_kelamin'], 'string'],
            [['tgl_lahir', 'tgl_perkawinan'], 'safe'],
            [['nik', 'gelar_depan', 'gelar_belakang', 'tempat_lahir', 'no_paspor', 'no_kitap', 'ibu'], 'string', 'max' => 45],
            [['nama', 'ayah'], 'string', 'max' => 145],
            [['agama_id'], 'exist', 'skipOnError' => true, 'targetClass' => Agama::className(), 'targetAttribute' => ['agama_id' => 'agama_id']],
            [['golongan_darah_id'], 'exist', 'skipOnError' => true, 'targetClass' => GolonganDarah::className(), 'targetAttribute' => ['golongan_darah_id' => 'golongan_darah_id']],
            [['keluarga_id'], 'exist', 'skipOnError' => true, 'targetClass' => Keluarga::className(), 'targetAttribute' => ['keluarga_id' => 'keluarga_id']],
            [['pekerjaan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pekerjaan::className(), 'targetAttribute' => ['pekerjaan_id' => 'pekerjaan_id']],
            [['pendidikan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pendidikan::className(), 'targetAttribute' => ['pendidikan_id' => 'pendidikan_id']],
            [['status_hubungan_status_hubungan_id'], 'exist', 'skipOnError' => true, 'targetClass' => StatusHubungan::className(), 'targetAttribute' => ['status_hubungan_status_hubungan_id' => 'status_hubungan_id']],
            [['status_perkawinan_id'], 'exist', 'skipOnError' => true, 'targetClass' => StatusPerkawinan::className(), 'targetAttribute' => ['status_perkawinan_id' => 'status_perkawinan_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'anggota_keluarga_id' => 'Anggota Keluarga ID',
            'nik' => 'Nik',
            'nama' => 'Nama',
            'keluarga_id' => 'Keluarga ID',
            'gelar_depan' => 'Gelar Depan',
            'gelar_belakang' => 'Gelar Belakang',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'agama_id' => 'Agama ID',
            'pendidikan_id' => 'Pendidikan ID',
            'pekerjaan_id' => 'Pekerjaan ID',
            'golongan_darah_id' => 'Golongan Darah ID',
            'status_perkawinan_id' => 'Status Perkawinan ID',
            'tgl_perkawinan' => 'Tgl Perkawinan',
            'status_hubungan_status_hubungan_id' => 'Status Hubungan Status Hubungan ID',
            'no_paspor' => 'No Paspor',
            'no_kitap' => 'No Kitap',
            'ayah' => 'Ayah',
            'ibu' => 'Ibu',
        ];
    }

    /**
     * Gets query for [[Agama]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAgama()
    {
        return $this->hasOne(Agama::className(), ['agama_id' => 'agama_id']);
    }

    /**
     * Gets query for [[GolonganDarah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGolonganDarah()
    {
        return $this->hasOne(GolonganDarah::className(), ['golongan_darah_id' => 'golongan_darah_id']);
    }

    /**
     * Gets query for [[Keluarga]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeluarga()
    {
        return $this->hasOne(Keluarga::className(), ['keluarga_id' => 'keluarga_id']);
    }

    /**
     * Gets query for [[Pekerjaan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPekerjaan()
    {
        return $this->hasOne(Pekerjaan::className(), ['pekerjaan_id' => 'pekerjaan_id']);
    }

    /**
     * Gets query for [[Pendidikan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPendidikan()
    {
        return $this->hasOne(Pendidikan::className(), ['pendidikan_id' => 'pendidikan_id']);
    }

    /**
     * Gets query for [[StatusHubunganStatusHubungan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatusHubunganStatusHubungan()
    {
        return $this->hasOne(StatusHubungan::className(), ['status_hubungan_id' => 'status_hubungan_status_hubungan_id']);
    }

    /**
     * Gets query for [[StatusPerkawinan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatusPerkawinan()
    {
        return $this->hasOne(StatusPerkawinan::className(), ['status_perkawinan_id' => 'status_perkawinan_id']);
    }

    /**
     * Gets query for [[PerangkatDesas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerangkatDesas()
    {
        return $this->hasMany(PerangkatDesa::className(), ['anggota_keluarga_id' => 'anggota_keluarga_id']);
    }

    /**
     * Gets query for [[Surats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurats()
    {
        return $this->hasMany(Surat::className(), ['anggota_keluarga_id' => 'anggota_keluarga_id']);
    }
}
