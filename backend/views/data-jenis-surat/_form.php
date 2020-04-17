<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DataJenisSurat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-jenis-surat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenis_surat_nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengantar')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'penutup')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'an_ttd')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-save"></i> Simpan', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
