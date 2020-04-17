<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataStatusHubungan */

$this->title = 'Tambah Data Status Hubungan';
$this->params['breadcrumbs'][] = ['label' => 'Data Status Hubungan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-status-hubungan-create">
    <div class="box box-primary">
        <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
