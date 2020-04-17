<?php

namespace backend\models;

class DataKeluarga extends \common\models\Keluarga
{
    public function attributeLabels()
    {
        return [
            'keluarga_id' => 'Keluarga ID',
            'keluarga_kode' => 'Kode',
            'keluarga_kk' => 'No. Kartu Keluarga',
            'dusun_rw_id' => 'Dusun',
            'alamat' => 'Alamat Lenakap',
        ];
    }
}