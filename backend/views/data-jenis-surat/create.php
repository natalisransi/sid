<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataJenisSurat */

$this->title = 'Tambah Data Jenis Surat';
$this->params['breadcrumbs'][] = ['label' => 'Data Jenis Surat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-jenis-surat-create">
    <div class="box box-primary">
        <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
