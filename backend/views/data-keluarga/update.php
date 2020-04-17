<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataKeluarga */

$this->title = 'Update Kartu Keluarga: ' . $model->keluarga_id;
$this->params['breadcrumbs'][] = ['label' => 'Kartu Keluargas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->keluarga_id, 'url' => ['view', 'id' => $model->keluarga_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kartu-keluarga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
