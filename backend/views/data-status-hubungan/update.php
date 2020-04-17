<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataStatusHubungan */

$this->title = 'Update Data Status Hubungan: ' . $model->status_hubungan_id;
$this->params['breadcrumbs'][] = ['label' => 'Data Status Hubungans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->status_hubungan_id, 'url' => ['view', 'id' => $model->status_hubungan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-status-hubungan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
