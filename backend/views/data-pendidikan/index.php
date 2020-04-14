<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\DataPendidikanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pendidikan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pendidikan-index">

    <div class="box box-primary">
        <div class="box-header with-border">



            <p>
                <?= Html::a('<b class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah </b>',
                    ['create'],
                    [
                        'data' => [
                            'title' => 'Tambah Pendidikan',
                            'toggle' => 'modal',
                            'target' => '#modalku',
                        ]
                    ]
                )
                ?>
            </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'pendidikan_id',
            'nama_pendidikan',

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
