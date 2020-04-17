<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\DataPerangkatDesaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-perangkat-desa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'perangkat_desa_id') ?>

    <?= $form->field($model, 'anggota_keluarga_id') ?>

    <?= $form->field($model, 'jenis_perangkat_id') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'tgl_lantik') ?>

    <?php // echo $form->field($model, 'tgl_berhenti') ?>

    <?php // echo $form->field($model, 'no_sk_lantik') ?>

    <?php // echo $form->field($model, 'no_sk_berhenti') ?>

    <?php // echo $form->field($model, 'file_sk_lantik') ?>

    <?php // echo $form->field($model, 'file_sk_berhenti') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
