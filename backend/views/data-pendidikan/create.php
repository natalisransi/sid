<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataPendidikan */

$this->title = 'Tambah Data Pendidikan';
$this->params['breadcrumbs'][] = ['label' => 'Data Pendidikan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pendidikan-create">
    <div class="box box-primary">
        <div class="box-header with-border">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
