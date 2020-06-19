<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "berita".
 *
 * @property int $berita_id
 * @property string|null $judul
 * @property string|null $isi
 * @property string|null $foto
 * @property int $berita_kategori_id
 *
 * @property BeritaKategori $beritaKategori
 */
class Berita extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'berita';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isi'], 'string'],
            [['berita_kategori_id'], 'required'],
            [['berita_kategori_id'], 'integer'],
            [['judul', 'foto'], 'string', 'max' => 250],
            [['berita_kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => BeritaKategori::className(), 'targetAttribute' => ['berita_kategori_id' => 'berita_kategori_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'berita_id' => 'Berita ID',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'foto' => 'Foto',
            'berita_kategori_id' => 'Berita Kategori ID',
        ];
    }

    /**
     * Gets query for [[BeritaKategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBeritaKategori()
    {
        return $this->hasOne(BeritaKategori::className(), ['berita_kategori_id' => 'berita_kategori_id']);
    }
}
