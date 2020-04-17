<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\JenisPerangkat;

/* @var $this yii\web\View */
/* @var $model backend\models\DataPerangkatDesa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-perangkat-desa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'anggota_keluarga_id')->textInput() ?>

    <?= $form->field($model, 'jenis_perangkat_id')->textInput()?>


    <?= $form->field($model, 'status')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tgl_lantik')->textInput() ?>

    <?= $form->field($model, 'tgl_berhenti')->textInput() ?>

    <?= $form->field($model, 'no_sk_lantik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_sk_berhenti')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_sk_lantik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_sk_berhenti')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
