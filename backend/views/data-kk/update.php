<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataKk */

$this->title = 'Update Data Kk: ' . $model->keluarga_id;
$this->params['breadcrumbs'][] = ['label' => 'Data Kks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->keluarga_id, 'url' => ['view', 'id' => $model->keluarga_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-kk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
