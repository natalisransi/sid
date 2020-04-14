<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataJenisSurat */

$this->title = 'Update Data Jenis Surat: ' . $model->jenis_surat_id;
$this->params['breadcrumbs'][] = ['label' => 'Data Jenis Surats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenis_surat_id, 'url' => ['view', 'id' => $model->jenis_surat_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-jenis-surat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
