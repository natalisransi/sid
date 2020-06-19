<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "berita_kategori".
 *
 * @property int $berita_kategori_id
 * @property string|null $berita_kategori_nama
 *
 * @property Berita[] $beritas
 */
class BeritaKategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'berita_kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['berita_kategori_nama'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'berita_kategori_id' => 'Berita Kategori ID',
            'berita_kategori_nama' => 'Berita Kategori Nama',
        ];
    }

    /**
     * Gets query for [[Beritas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBeritas()
    {
        return $this->hasMany(Berita::className(), ['berita_kategori_id' => 'berita_kategori_id']);
    }
}
