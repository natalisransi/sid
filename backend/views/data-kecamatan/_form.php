<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Kabupaten;

/* @var $this yii\web\View */
/* @var $model backend\models\DataKecamatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-kecamatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kecamatan_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan_nama')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'kabupaten_kabupaten_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Kabupaten::find()->all(), 'kabupaten_id','kabupaten_nama'
        ),
        'language' => 'en',
        'options' => ['placeholder' => 'Pilih Kabupaten'],
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
