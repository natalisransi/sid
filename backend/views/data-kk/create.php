<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataKk */

$this->title = 'Create Data Kk';
$this->params['breadcrumbs'][] = ['label' => 'Data Kks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-kk-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
