<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Keluarga;
use common\models\Agama;
use common\models\Pendidikan;
use common\models\Pekerjaan;
use common\models\GolonganDarah;
use common\models\StatusHubungan;
use common\models\StatusPerkawinan;
use common\models\PerangkatDesa;


/* @var $this yii\web\View */
/* @var $model backend\models\DataPenduduk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-penduduk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?=
        $form->field($model, 'keluarga_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Keluarga::find()->all(), 'keluarga_id','keluarga_kk'
            ),
            'language' => 'en',
            'options' => ['placeholder' => 'Pilih KK '],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= $form->field($model, 'gelar_depan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gelar_belakang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList([ 'LAKI-LAKI' => 'LAKI-LAKI', 'PEREMPUAN' => 'PEREMPUAN', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?=
        $form->field($model, 'agama_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Agama::find()->all(), 'agama_id','nama_agama'
            ),
            'language' => 'en',
            'options' => ['placeholder' => 'Pilih Agama '],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>


    <?=
        $form->field($model, 'pendidikan_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Pendidikan::find()->all(), 'pendidikan_id','nama_pendidikan'
            ),
            'language' => 'en',
            'options' => ['placeholder' => 'Pilih Pendidikan '],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?=
        $form->field($model, 'pekerjaan_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Pekerjaan::find()->all(), 'pekerjaan_id','nama_pekerjaan'
            ),
            'language' => 'en',
            'options' => ['placeholder' => 'Pilih Pekerjaan '],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);

    ?>

    <?=
        $form->field($model, 'golongan_darah_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(GolonganDarah::find()->all(), 'golongan_darah_id','nama_golongan_darah'
            ),
            'language' => 'en',
            'options' => ['placeholder' => 'Pilih Golongan Darah '],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);

        ?>

    <?=
        $form->field($model, 'status_perkawinan_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(StatusPerkawinan::find()->all(), 'status_perkawinan_id','nama_status_perkawinan'
            ),
            'language' => 'en',
            'options' => ['placeholder' => 'Pilih Status Pserkawainan '],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= $form->field($model, 'tgl_perkawinan')->textInput() ?>
    <?=
        $form->field($model, 'tgl_perkawinan')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Masukan Tanggal'],
            'pluginOptions' => [
                'autoclose'=> true,
                'format' => 'dd-M-yyyy'
            ],
        ]);
    ?>

   <?=
        $form->field($model, 'status_hubungan_status_hubungan_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(StatusHubungan::find()->all(), 'status_hubungan_id','status_hubungan_nama'
            ),
            'language' => 'en',
            'options' => ['placeholder' => 'Pilih Status Hubungan '],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
//    ?>

    <?= $form->field($model, 'no_paspor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_kitap')->textInput(['maxlength' => true]) ?>


    <?=
        $form->field($model, 'ayah')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(PerangkatDesa::find()->all(), 'ayah','jenis_perangkat_id'
            ),
            'language' => 'en',
            'options' => ['placeholder' => 'Pilih Perangkat Desa '],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= $form->field($model, 'ibu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('<i class="fa fa-save"></i> Simpan', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
