<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DataStatusHubungan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-status-hubungan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status_hubungan_nama')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-save"></i> Simpan', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
