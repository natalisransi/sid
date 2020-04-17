<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use common\models\DusunRw;

/* @var $this yii\web\View */
/* @var $model backend\models\DataKeluarga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kartu-keluarga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'keluarga_kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keluarga_kk')->textInput(['maxlength' => true]) ?>

    <?=

    $form->field($model, 'dusun_rw_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(DusunRw::find()->all(), 'dusun_rw_id','dusun_rw_nama'
        ),
        'language' => 'en',
        'options' => ['placeholder' => 'Pilih  Dusun'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);

    ?>


    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
