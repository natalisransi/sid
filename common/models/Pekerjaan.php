<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pekerjaan".
 *
 * @property int $pekerjaan_id
 * @property string $nama_pekerjaan
 *
 * @property AnggotaKeluarga[] $anggotaKeluargas
 */
class Pekerjaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pekerjaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pekerjaan'], 'required'],
            [['nama_pekerjaan'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pekerjaan_id' => 'Pekerjaan ID',
            'nama_pekerjaan' => 'Nama Pekerjaan',
        ];
    }

    /**
     * Gets query for [[AnggotaKeluargas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnggotaKeluargas()
    {
        return $this->hasMany(AnggotaKeluarga::className(), ['pekerjaan_id' => 'pekerjaan_id']);
    }
}
