<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataPenduduk */

$this->title = 'Create Data Penduduk';
$this->params['breadcrumbs'][] = ['label' => 'Data Penduduk', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-penduduk-create">

    <div class="box box-primary">
        <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
