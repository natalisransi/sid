<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataMigration */

$this->title = 'Update Data Migration: ' . $model->version;
$this->params['breadcrumbs'][] = ['label' => 'Data Migrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->version, 'url' => ['view', 'id' => $model->version]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-migration-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
