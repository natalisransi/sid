<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataPerangkatDesa */

$this->title = 'Tambah Data Perangkat Desa';
$this->params['breadcrumbs'][] = ['label' => 'Data Perangkat Desa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-perangkat-desa-create">
    <div class="box box-primary">
        <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
