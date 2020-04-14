<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\DataKkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-kk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'keluarga_id') ?>

    <?= $form->field($model, 'keluarga_kode') ?>

    <?= $form->field($model, 'keluarga_kk') ?>

    <?= $form->field($model, 'dusun_rw_id') ?>

    <?= $form->field($model, 'alamat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
