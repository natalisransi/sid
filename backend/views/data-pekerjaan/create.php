<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataPekerjaan */

$this->title = 'Tambah Data Pekerjaan';
$this->params['breadcrumbs'][] = ['label' => 'Data Pekerjaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pekerjaan-create">
    <div class="box box-primary">
        <div class="box-header with-border">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
