<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataKabupaten */

$this->title = 'Update Data Kabupaten: ' . $model->kabupaten_id;
$this->params['breadcrumbs'][] = ['label' => 'Data Kabupatens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kabupaten_id, 'url' => ['view', 'id' => $model->kabupaten_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-kabupaten-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
