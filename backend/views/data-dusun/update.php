<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataDusun */

$this->title = 'Update Data Dusun: ' . $model->dusun_rw_id;
$this->params['breadcrumbs'][] = ['label' => 'Data Dusuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dusun_rw_id, 'url' => ['view', 'id' => $model->dusun_rw_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-dusun-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
