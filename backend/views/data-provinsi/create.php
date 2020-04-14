<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataProvinsi */

$this->title = 'Tambah Data Provinsi';
$this->params['breadcrumbs'][] = ['label' => 'Data Provinsi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-provinsi-create">
    <div class="box box-primary">
        <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>

</div>
