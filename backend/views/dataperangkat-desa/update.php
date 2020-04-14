<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataPerangkatDesa */

$this->title = 'Update Data Perangkat Desa: ' . $model->perangkat_desa_id;
$this->params['breadcrumbs'][] = ['label' => 'Data Perangkat Desas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->perangkat_desa_id, 'url' => ['view', 'id' => $model->perangkat_desa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-perangkat-desa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
