<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "golongan_darah".
 *
 * @property int $golongan_darah_id
 * @property string $nama_golongan_darah
 *
 * @property AnggotaKeluarga[] $anggotaKeluargas
 */
class GolonganDarah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golongan_darah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_golongan_darah'], 'required'],
            [['nama_golongan_darah'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'golongan_darah_id' => 'Golongan Darah ID',
            'nama_golongan_darah' => 'Nama Golongan Darah',
        ];
    }

    /**
     * Gets query for [[AnggotaKeluargas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnggotaKeluargas()
    {
        return $this->hasMany(AnggotaKeluarga::className(), ['golongan_darah_id' => 'golongan_darah_id']);
    }
}
