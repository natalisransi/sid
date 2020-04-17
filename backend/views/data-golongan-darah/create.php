<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataGolonganDarah */

$this->title = 'Tambah Data Golongan Darah';
$this->params['breadcrumbs'][] = ['label' => 'Data Golongan Darah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-golongan-darah-create">
    <div class="box box-primary">
        <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
