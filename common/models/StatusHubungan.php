<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "status_hubungan".
 *
 * @property int $status_hubungan_id
 * @property string $status_hubungan_nama
 *
 * @property AnggotaKeluarga[] $anggotaKeluargas
 */
class StatusHubungan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status_hubungan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_hubungan_nama'], 'required'],
            [['status_hubungan_nama'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'status_hubungan_id' => 'Status Hubungan ID',
            'status_hubungan_nama' => 'Status Hubungan Nama',
        ];
    }

    /**
     * Gets query for [[AnggotaKeluargas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnggotaKeluargas()
    {
        return $this->hasMany(AnggotaKeluarga::className(), ['status_hubungan_status_hubungan_id' => 'status_hubungan_id']);
    }
}
