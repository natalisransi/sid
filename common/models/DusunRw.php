<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dusun_rw".
 *
 * @property int $dusun_rw_id
 * @property string $dusun_rw_kode
 * @property string|null $dusun_rw_nama
 * @property int $desa_kelurahan_id
 *
 * @property DesaKelurahan $desaKelurahan
 * @property Keluarga[] $keluargas
 */
class DusunRw extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dusun_rw';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dusun_rw_kode', 'desa_kelurahan_id'], 'required'],
            [['desa_kelurahan_id'], 'integer'],
            [['dusun_rw_kode'], 'string', 'max' => 45],
            [['dusun_rw_nama'], 'string', 'max' => 145],
            [['desa_kelurahan_id'], 'exist', 'skipOnError' => true, 'targetClass' => DesaKelurahan::className(), 'targetAttribute' => ['desa_kelurahan_id' => 'desa_kelurahan_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dusun_rw_id' => 'Dusun Rw ID',
            'dusun_rw_kode' => 'Dusun Rw Kode',
            'dusun_rw_nama' => 'Dusun Rw Nama',
            'desa_kelurahan_id' => 'Desa Kelurahan ID',
        ];
    }

    /**
     * Gets query for [[DesaKelurahan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDesaKelurahan()
    {
        return $this->hasOne(DesaKelurahan::className(), ['desa_kelurahan_id' => 'desa_kelurahan_id']);
    }

    /**
     * Gets query for [[Keluargas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKeluargas()
    {
        return $this->hasMany(Keluarga::className(), ['dusun_rw_id' => 'dusun_rw_id']);
    }
}
