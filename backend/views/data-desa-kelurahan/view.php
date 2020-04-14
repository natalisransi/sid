<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DataDesaKelurahan */

$this->title = $model->desa_kelurahan_id;
$this->params['breadcrumbs'][] = ['label' => 'Desa Kelurahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="desa-kelurahan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->desa_kelurahan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->desa_kelurahan_id], [
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
            'desa_kelurahan_id',
            'desa_kelurahan_kode',
            'desa_kelurahan_nama',
            'kecamatan_id',
        ],
    ]) ?>

</div>
