<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\DataDesaKelurahanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="desa-kelurahan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'desa_kelurahan_id') ?>

    <?= $form->field($model, 'desa_kelurahan_kode') ?>

    <?= $form->field($model, 'desa_kelurahan_nama') ?>

    <?= $form->field($model, 'kecamatan_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
