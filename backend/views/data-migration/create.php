<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataMigration */

$this->title = 'Tambah Data Migration';
$this->params['breadcrumbs'][] = ['label' => 'Data Migration', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-migration-create">
    <div class="box box-primary">
        <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
