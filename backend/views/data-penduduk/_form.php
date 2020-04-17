<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\Keluarga;
use common\models\Agama;
use common\models\GolonganDarah;
use common\models\StatusPerkawinan;
use common\models\Pendidikan;
use common\models\Pekerjaan;
use common\models\StatusHubungan;
/* @var $this yii\web\View */
/* @var $model backend\models\DataPenduduk */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>

<div class="data-penduduk-form">

    <div class="box box-primary">
        <div class="box-header with-border">

<div class="row">
    <div class="col-md-6">
        <div class="panel-group">
            <div class="panel panel-primary">
                <div class="panel-heading">DATA POKOK</div>
                <div class="panel-body">

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

                    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'gelar_depan')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'gelar_belakang')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'jenis_kelamin')->dropDownList([ 'LAKI-LAKI' => 'LAKI-LAKI', 'PEREMPUAN' => 'PEREMPUAN', ], ['prompt' => 'Pilih Jenis Kelamin ...']) ?>

                    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'tgl_lahir')->textInput(['placeholder'=>'Contoh: 1984-12-25']) ?>

                    <?= $form->field($model, 'ayah')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'ibu')->textInput(['maxlength' => true]) ?>


                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel-group">
            <div class="panel panel-primary">
                <div class="panel-heading">DATA TAMBAHAN</div>
                <div class="panel-body">


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
                        'options' => ['placeholder' => 'Pilih Status Perkawinan '],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);

                    ?>

                    <?= $form->field($model, 'tgl_perkawinan')->textInput(['placeholder'=>'Contoh: 1984-12-25']) ?>


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

                    ?>

                    <?= $form->field($model, 'no_paspor')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'no_kitap')->textInput(['maxlength' => true]) ?>




                </div>
            </div>
        </div>
    </div>
</div>
            <div class="form-group">
                <?= Html::submitButton('<b class="fa fa-save"> </b> Simpan ', ['class' => 'btn btn-lg btn-block btn-primary']) ?>
            </div>



        </div>
    </div>

</div>

<?php ActiveForm::end(); ?>