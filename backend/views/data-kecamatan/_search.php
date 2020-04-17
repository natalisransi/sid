<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\DataKecamatanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-kecamatan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kecamatan_id') ?>

    <?= $form->field($model, 'kecamatan_kode') ?>

    <?= $form->field($model, 'kecamatan_nama') ?>

    <?= $form->field($model, 'kabupaten_kabupaten_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
