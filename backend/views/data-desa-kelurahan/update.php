<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataDesaKelurahan */

$this->title = 'Update Desa Kelurahan: ' . $model->desa_kelurahan_id;
$this->params['breadcrumbs'][] = ['label' => 'Desa Kelurahans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->desa_kelurahan_id, 'url' => ['view', 'id' => $model->desa_kelurahan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="desa-kelurahan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
