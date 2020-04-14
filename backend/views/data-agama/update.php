<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataAgama */

$this->title = 'Update Data Agama: ' . $model->agama_id;
$this->params['breadcrumbs'][] = ['label' => 'Data Agamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->agama_id, 'url' => ['view', 'id' => $model->agama_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-agama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
