<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\DataPendudukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Penduduk';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-penduduk-index">


    <div class="box box-primary">
        <div class="box-header with-border">

    <p>
        <?= Html::a('<b class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah </b>', ['create']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'anggota_keluarga_id',
            'keluarga_id',
            'nik',
            'nama',

            //'gelar_depan',
            //'gelar_belakang',
            //'jenis_kelamin',
            //'tempat_lahir',
            //'agama_id',
            //'pendidikan_id',
            //'pekerjaan_id',
            //'golongan_darah_id',
            //'status_perkawinan_id',
            //'tgl_perkawinan',
            //'status_hubungan_status_hubungan_id',
            //'no_paspor',
            //'no_kitap',
            //'ayah',
            //'ibu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div>
    </div>

</div>
