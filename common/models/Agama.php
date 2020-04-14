<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "agama".
 *
 * @property int $agama_id
 * @property string $nama_agama
 *
 * @property AnggotaKeluarga[] $anggotaKeluargas
 */
class Agama extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agama';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_agama'], 'required'],
            [['nama_agama'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'agama_id' => 'Agama ID',
            'nama_agama' => 'Nama Agama',
        ];
    }

    /**
     * Gets query for [[AnggotaKeluargas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnggotaKeluargas()
    {
        return $this->hasMany(AnggotaKeluarga::className(), ['agama_id' => 'agama_id']);
    }
}
