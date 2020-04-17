<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\DataDusunSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-dusun-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'dusun_rw_id') ?>

    <?= $form->field($model, 'dusun_rw_kode') ?>

    <?= $form->field($model, 'dusun_rw_nama') ?>

    <?= $form->field($model, 'desa_kelurahan_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
