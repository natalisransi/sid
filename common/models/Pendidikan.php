<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pendidikan".
 *
 * @property int $pendidikan_id
 * @property string $nama_pendidikan
 *
 * @property AnggotaKeluarga[] $anggotaKeluargas
 */
class Pendidikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendidikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pendidikan'], 'required'],
            [['nama_pendidikan'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pendidikan_id' => 'Pendidikan ID',
            'nama_pendidikan' => 'Nama Pendidikan',
        ];
    }

    /**
     * Gets query for [[AnggotaKeluargas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnggotaKeluargas()
    {
        return $this->hasMany(AnggotaKeluarga::className(), ['pendidikan_id' => 'pendidikan_id']);
    }
}
