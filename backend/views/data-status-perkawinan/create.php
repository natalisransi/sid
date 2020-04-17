<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataStatusPerkawinan */

$this->title = 'Tambah Data Status Perkawinan';
$this->params['breadcrumbs'][] = ['label' => 'Data Status Perkawinan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-status-perkawinan-create">
    <div class="box box-primary">
        <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
