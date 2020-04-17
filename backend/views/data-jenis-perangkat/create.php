<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataJenisPerangkat */

$this->title = 'Tambah Data Jenis Perangkat';
$this->params['breadcrumbs'][] = ['label' => 'Data Jenis Perangkat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-jenis-perangkat-create">
    <div class="box box-primary">
        <div class="box-header with-border">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
