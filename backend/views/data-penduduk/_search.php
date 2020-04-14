<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\DataPendudukSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-penduduk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'anggota_keluarga_id') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'keluarga_id') ?>

    <?= $form->field($model, 'gelar_depan') ?>

    <?php // echo $form->field($model, 'gelar_belakang') ?>

    <?php // echo $form->field($model, 'jenis_kelamin') ?>

    <?php // echo $form->field($model, 'tempat_lahir') ?>

    <?php // echo $form->field($model, 'agama_id') ?>

    <?php // echo $form->field($model, 'pendidikan_id') ?>

    <?php // echo $form->field($model, 'pekerjaan_id') ?>

    <?php // echo $form->field($model, 'golongan_darah_id') ?>

    <?php // echo $form->field($model, 'status_perkawinan_id') ?>

    <?php // echo $form->field($model, 'tgl_perkawinan') ?>

    <?php // echo $form->field($model, 'status_hubungan_status_hubungan_id') ?>

    <?php // echo $form->field($model, 'no_paspor') ?>

    <?php // echo $form->field($model, 'no_kitap') ?>

    <?php // echo $form->field($model, 'ayah') ?>

    <?php // echo $form->field($model, 'ibu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
