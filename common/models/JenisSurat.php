<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jenis_surat".
 *
 * @property int $jenis_surat_id
 * @property string $jenis_surat_nama
 * @property string|null $pengantar
 * @property string|null $penutup
 * @property string|null $an_ttd
 *
 * @property Surat[] $surats
 */
class JenisSurat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_surat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_surat_nama'], 'required'],
            [['pengantar', 'penutup'], 'string'],
            [['jenis_surat_nama'], 'string', 'max' => 145],
            [['an_ttd'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'jenis_surat_id' => 'Jenis Surat ID',
            'jenis_surat_nama' => 'Jenis Surat Nama',
            'pengantar' => 'Pengantar',
            'penutup' => 'Penutup',
            'an_ttd' => 'An Ttd',
        ];
    }

    /**
     * Gets query for [[Surats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurats()
    {
        return $this->hasMany(Surat::className(), ['jenis_surat_id' => 'jenis_surat_id']);
    }
}
