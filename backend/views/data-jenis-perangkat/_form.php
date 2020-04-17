<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DataJenisPerangkat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-jenis-perangkat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_perangkat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-save"></i> Simpan', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
