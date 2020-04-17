<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataAgama */

$this->title = 'Tambah Data Agama';
$this->params['breadcrumbs'][] = ['label' => 'Data Agama', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-agama-create">
    <div class="box box-primary">
        <div class="box-header with-border">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>

</div>
