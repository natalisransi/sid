<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataKabupaten */

$this->title = 'Tambah Data Kabupaten';
$this->params['breadcrumbs'][] = ['label' => 'Data Kabupaten', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-kabupaten-create">
    <div class="box box-primary">
        <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
