<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataDusun */

$this->title = 'Tambah Data Dusun';
$this->params['breadcrumbs'][] = ['label' => 'Data Dusun', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-dusun-create">
    <div class="box box-primary">
        <div class="box-header with-border">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>

</div>
