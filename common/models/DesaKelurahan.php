<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "desa_kelurahan".
 *
 * @property int $desa_kelurahan_id
 * @property string $desa_kelurahan_kode
 * @property string $desa_kelurahan_nama
 * @property int $kecamatan_id
 *
 * @property Kecamatan $kecamatan
 * @property DusunRw[] $dusunRws
 */
class DesaKelurahan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'desa_kelurahan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['desa_kelurahan_kode', 'desa_kelurahan_nama', 'kecamatan_id'], 'required'],
            [['kecamatan_id'], 'integer'],
            [['desa_kelurahan_kode'], 'string', 'max' => 45],
            [['desa_kelurahan_nama'], 'string', 'max' => 145],
            [['kecamatan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kecamatan::className(), 'targetAttribute' => ['kecamatan_id' => 'kecamatan_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'desa_kelurahan_id' => 'Desa Kelurahan ID',
            'desa_kelurahan_kode' => 'Desa Kelurahan Kode',
            'desa_kelurahan_nama' => 'Desa Kelurahan Nama',
            'kecamatan_id' => 'Kecamatan ID',
        ];
    }

    /**
     * Gets query for [[Kecamatan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKecamatan()
    {
        return $this->hasOne(Kecamatan::className(), ['kecamatan_id' => 'kecamatan_id']);
    }

    /**
     * Gets query for [[DusunRws]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDusunRws()
    {
        return $this->hasMany(DusunRw::className(), ['desa_kelurahan_id' => 'desa_kelurahan_id']);
    }
}
