<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'sid | LAKAPERA';
?>
<div class="site-index">

    <div class="box box-primary">
        <div class="box-header with-border">
    <div class="jumbotron">
        <h1>sid | LAKAPERA</h1>

        <p class="lead">Sistem Informasi Desa Lakapera, Kabupaten Buton Tengah, Sulawesi Tenggara <br>"We Deliver Solutions!"</p>

        <p>
            <?= Html::a(
                'Data Penduduk',
                ['/data-penduduk/index'],
                ['data-method' => 'post', 'class' => 'btn btn-primary btn-flat']
            ) ?>
        </p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>KIP</h2>

                <p>Program Indonesia Pintar (PIP) melalui Kartu Indonesia Pintar (KIP) adalah
                    pemberian bantuan tunai pendidikan kepada anak usia sekolah (usia 6 - 21 tahun)
                    yang berasal dari keluarga miskin, rentan miskin: pemilik Kartu Keluarga Sejahtera (KKS),
                    peserta Program Keluarga Harapan (PKH), yatim piatu, penyandang disabilitas,
                    korban bencana alam/musibah.
                    PIP merupakan bagian dari penyempurnaan program Bantuan Siswa Miskin (BSM).</p>

                <p><a class="btn btn-default" href="#">Lihat  &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>KIS</h2>

                <p>Kartu Indonesia Sehat (KIS) adalah kartu identitas peserta Jaminan Kesehatan Nasional (JKN) yang dikelola oleh Badan Penyelenggara Jaminan Sosial (BPJS) Kesehatan. Penggantian kartu BPJS Kesehatan menjadi KIS dimulai 1 Maret 2015.[1]

                    Kartu baru ini untuk tahap awal diberikan kepada peserta Penerima Biaya Iuran (PBI) yang berjumlah 86,4 juta orang. Selain PBI, peserta BPJS Kesehatan yang mendaftar pada Maret akan langsung mendapat KIS.

                    </p>

                <p><a class="btn btn-default" href="#">Lihat &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Pra Kerja</h2>

                <p>Kartu Pra Kerja merupakan program dari Pemerintah Pusat yang bertujuan untuk mengembangkan kompetensi dan kesempatan bagi para pencari kerja, pekerja/buruh yang terkena dampak dari pemutusan hubungan kerja, dan/atau pekerja/buruh yang sedang membutuhkan dukungan finansial</p>

                <p><a class="btn btn-default" href="#">Lihat &raquo;</a></p>
            </div>
        </div>

    </div>

            </div>

    </div>
</div>
