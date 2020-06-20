<?php

namespace api\modules\v1\controllers;

use api\modules\v1\components\BaseController;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

class NewsController extends BaseController
{
    public $modelClass = 'common\models\Berita';

    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'authenticator' => [
                'except' => ['index']
            ],
        ]);
    }
}