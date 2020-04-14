<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataKecamatan */

$this->title = 'Tambah Data Kecamatan';
$this->params['breadcrumbs'][] = ['label' => 'Data Kecamatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-kecamatan-create">
    <div class="box box-primary">
        <div class="box-header with-border">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
