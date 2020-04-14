<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataJenisPerangkat */

$this->title = 'Update Data Jenis Perangkat: ' . $model->jenis_perangkat_id;
$this->params['breadcrumbs'][] = ['label' => 'Data Jenis Perangkats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenis_perangkat_id, 'url' => ['view', 'id' => $model->jenis_perangkat_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-jenis-perangkat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
