<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DataPerangkatDesa */

$this->title = $model->perangkat_desa_id;
$this->params['breadcrumbs'][] = ['label' => 'Data Perangkat Desas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-perangkat-desa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->perangkat_desa_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->perangkat_desa_id], [
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
            'perangkat_desa_id',
            'anggota_keluarga_id',
            'jenis_perangkat_id',
            'status',
            'tgl_lantik',
            'tgl_berhenti',
            'no_sk_lantik',
            'no_sk_berhenti',
            'file_sk_lantik',
            'file_sk_berhenti',
        ],
    ]) ?>

</div>
