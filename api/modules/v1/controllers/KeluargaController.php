<?php

namespace api\modules\v1\controllers;

use yii\filters\ContentNegotiator;
use yii\filters\Cors;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;
use yii\web\Response;
use api\modules\v1\components\BaseController;

class KeluargaController extends BaseController
{
    public $modelClass = 'common\models\Keluarga';

}