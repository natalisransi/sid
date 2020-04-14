<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataGolonganDarah */

$this->title = 'Update Data Golongan Darah: ' . $model->golongan_darah_id;
$this->params['breadcrumbs'][] = ['label' => 'Data Golongan Darahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->golongan_darah_id, 'url' => ['view', 'id' => $model->golongan_darah_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-golongan-darah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
