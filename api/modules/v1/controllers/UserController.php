<?php

namespace api\modules\v1\controllers;


use api\modules\v1\components\BaseController;
use api\modules\v1\models\LoginForm;
use Yii;
use yii\filters\ContentNegotiator;
use yii\filters\Cors;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\web\Response;

class UserController extends BaseController
{
    public $modelClass = 'api\modules\v1\models\User';

    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'authenticator' => [
                'except' => ['login']
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'login' => ['post'],
                ],
            ],
        ]);
    }

    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post(), '') && $token = $model->login()) {
            return ['code' => 200, 'token' => $token];
        }

        return [
            'code' => 0,
            'message' => $model->getFirstErrors() ? $model->getFirstErrors() : 'Login data is required',
        ];
    }
}