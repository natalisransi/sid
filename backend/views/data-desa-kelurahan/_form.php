<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Kecamatan;

/* @var $this yii\web\View */
/* @var $model backend\models\DataDesaKelurahan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="desa-kelurahan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'desa_kelurahan_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desa_kelurahan_nama')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'kecamatan_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Kecamatan::find()->all(), 'kecamatan_id','kecamatan_nama'
        ),
        'language' => 'en',
        'options' => ['placeholder' => 'Pilih Kecamatan'],
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
