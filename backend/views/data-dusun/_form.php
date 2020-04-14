<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\DesaKelurahan;

/* @var $this yii\web\View */
/* @var $model backend\models\DataDusun */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-dusun-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dusun_rw_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dusun_rw_nama')->textInput(['maxlength' => true]) ?>



    <?=

    $form->field($model, 'desa_kelurahan_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(DesaKelurahan::find()->all(), 'desa_kelurahan_id','desa_kelurahan_nama'
        ),
        'language' => 'en',
        'options' => ['placeholder' => 'Pilih  Kelurahan / Desa'],
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
