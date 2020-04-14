<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PerangkatDesaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Perangkat Desa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-perangkat-desa-index">

    <div class="box box-primary">
        <div class="box-header with-border">

    <p>
        <?= Html::a('Tambah ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'perangkat_desa_id',
            'anggota_keluarga_id',
            'jenis_perangkat_id',
            'status',
            'tgl_lantik',
            //'tgl_berhenti',
            //'no_sk_lantik',
            //'no_sk_berhenti',
            //'file_sk_lantik',
            //'file_sk_berhenti',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        </div>
    </div>

</div>
