<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DataPenduduk */

$this->title = $model->anggota_keluarga_id;
$this->params['breadcrumbs'][] = ['label' => 'Data Penduduks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-penduduk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->anggota_keluarga_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->anggota_keluarga_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'anggota_keluarga_id',
            'nik',
            'nama',
            'keluarga_id',
            'gelar_depan',
            'gelar_belakang',
            'jenis_kelamin',
            'tempat_lahir',
            'agama_id',
            'pendidikan_id',
            'pekerjaan_id',
            'golongan_darah_id',
            'status_perkawinan_id',
            'tgl_perkawinan',
            'status_hubungan_status_hubungan_id',
            'no_paspor',
            'no_kitap',
            'ayah',
            'ibu',
        ],
    ]) ?>

</div>
