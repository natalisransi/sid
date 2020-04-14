<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jenis_perangkat".
 *
 * @property int $jenis_perangkat_id
 * @property string $nama_perangkat
 *
 * @property PerangkatDesa[] $perangkatDesas
 */
class JenisPerangkat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_perangkat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_perangkat'], 'required'],
            [['nama_perangkat'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'jenis_perangkat_id' => 'Jenis Perangkat ID',
            'nama_perangkat' => 'Nama Perangkat',
        ];
    }

    /**
     * Gets query for [[PerangkatDesas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerangkatDesas()
    {
        return $this->hasMany(PerangkatDesa::className(), ['jenis_perangkat_id' => 'jenis_perangkat_id']);
    }
}
