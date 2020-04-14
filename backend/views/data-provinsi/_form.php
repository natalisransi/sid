<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DataProvinsi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-provinsi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'provinsi_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provinsi_nama')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-save"></i> Simpan', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
