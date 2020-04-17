<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataStatusPerkawinan */

$this->title = 'Update Data Status Perkawinan: ' . $model->status_perkawinan_id;
$this->params['breadcrumbs'][] = ['label' => 'Data Status Perkawinans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->status_perkawinan_id, 'url' => ['view', 'id' => $model->status_perkawinan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-status-perkawinan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
