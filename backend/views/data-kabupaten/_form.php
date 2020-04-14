<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Provinsi;

/* @var $this yii\web\View */
/* @var $model backend\models\DataKabupaten */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-kabupaten-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kabupaten_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kabupaten_nama')->textInput(['maxlength' => true]) ?>

    <?=

    $form->field($model, 'provinsi_provinsi_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Provinsi::find()->all(), 'provinsi_id','provinsi_nama'
        ),
        'language' => 'en',
        'options' => ['placeholder' => 'Pilih Provinsi'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);

    ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-save"></i> Simpan', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
