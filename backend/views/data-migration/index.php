<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\DataMigrationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Migration';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-migration-index">
    <div class="box box-primary">
        <div class="box-header with-border">


    <p>
        <?= Html::a('Tambah', ['create'], ['class' => 'btn btn-success']) ?>


    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'version',
            'apply_time:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

        </div>
    </div>
</div>


<?php
$js = <<< JS
    $('#modalku').on('shown.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var url = button.attr('href');
        var title = button.attr('data-title');
        $('#modalContent').html('Loading content..');
        $('#modalHeader').html('<h4>'+title+'</h4>');
        $('#modalContent').load(url);
 
        return false;
    });
JS;
$this->registerJs($js, \yii\web\View::POS_READY);
?>


<?php
Modal::begin([
    'header' => '<div id="modalHeader"></div>',
    'id' => 'modalku',
    'size'=>'modal-lg',
    'options' => [
        'tabindex' => false,

    ],
]);
echo "<div id='modalContent'> </div>";
Modal::end();
?>
