<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataPendidikan */

$this->title = 'Update Data Pendidikan: ' . $model->pendidikan_id;
$this->params['breadcrumbs'][] = ['label' => 'Data Pendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pendidikan_id, 'url' => ['view', 'id' => $model->pendidikan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-pendidikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
