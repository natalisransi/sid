<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "keluarga".
 *
 * @property int $keluarga_id
 * @property string $keluarga_kode
 * @property string|null $keluarga_kk
 * @property int $dusun_rw_id
 * @property string|null $alamat
 *
 * @property AnggotaKeluarga[] $anggotaKeluargas
 * @property DusunRw $dusunRw
 */
class Keluarga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'keluarga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['keluarga_kode', 'dusun_rw_id'], 'required'],
            [['dusun_rw_id'], 'integer'],
            [['keluarga_kode', 'keluarga_kk', 'alamat'], 'string', 'max' => 45],
            [['dusun_rw_id'], 'exist', 'skipOnError' => true, 'targetClass' => DusunRw::className(), 'targetAttribute' => ['dusun_rw_id' => 'dusun_rw_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'keluarga_id' => 'Keluarga ID',
            'keluarga_kode' => 'Keluarga Kode',
            'keluarga_kk' => 'Keluarga Kk',
            'dusun_rw_id' => 'Dusun Rw ID',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * Gets query for [[AnggotaKeluargas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnggotaKeluargas()
    {
        return $this->hasMany(AnggotaKeluarga::className(), ['keluarga_id' => 'keluarga_id']);
    }

    /**
     * Gets query for [[DusunRw]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDusunRw()
    {
        return $this->hasOne(DusunRw::className(), ['dusun_rw_id' => 'dusun_rw_id']);
    }
}
