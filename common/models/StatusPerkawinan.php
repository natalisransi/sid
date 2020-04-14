<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "status_perkawinan".
 *
 * @property int $status_perkawinan_id
 * @property string $nama_status_perkawinan
 *
 * @property AnggotaKeluarga[] $anggotaKeluargas
 */
class StatusPerkawinan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status_perkawinan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_status_perkawinan'], 'required'],
            [['nama_status_perkawinan'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'status_perkawinan_id' => 'Status Perkawinan ID',
            'nama_status_perkawinan' => 'Nama Status Perkawinan',
        ];
    }

    /**
     * Gets query for [[AnggotaKeluargas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnggotaKeluargas()
    {
        return $this->hasMany(AnggotaKeluarga::className(), ['status_perkawinan_id' => 'status_perkawinan_id']);
    }
}
