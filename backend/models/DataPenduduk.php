<?php


namespace backend\models;
use common\models\AnggotaKeluarga;


class DataPenduduk extends AnggotaKeluarga
{

    public function attributeLabels()
    {
        return [
            'anggota_keluarga_id' => 'Anggota Keluarga ID',
            'nik' => 'NIK',
            'nama' => 'Nama',
            'keluarga_id' => 'Nomor KK',
            'gelar_depan' => 'Gelar Depan',
            'gelar_belakang' => 'Gelar Belakang',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl. Lahir',
            'agama_id' => 'Agama',
            'pendidikan_id' => 'Pendidikan',
            'pekerjaan_id' => 'Pekerjaan',
            'golongan_darah_id' => 'Golongan Darah ID',
            'status_perkawinan_id' => 'Status Perkawinan',
            'tgl_perkawinan' => 'Tgl. Perkawinan',
            'status_hubungan_status_hubungan_id' => 'Status Hubungan ',
            'no_paspor' => 'No Paspor',
            'no_kitap' => 'No Kitap',
            'ayah' => 'Ayah',
            'ibu' => 'Ibu',
        ];
    }

}