<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataPenduduk */

$this->title = 'Update Data Penduduk: ' . $model->anggota_keluarga_id;
$this->params['breadcrumbs'][] = ['label' => 'Data Penduduks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->anggota_keluarga_id, 'url' => ['view', 'id' => $model->anggota_keluarga_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-penduduk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
