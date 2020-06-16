<?php

namespace api\modules\v1\models;

class User extends \common\models\User
{
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['auth_key' => $token, 'status' => self::STATUS_ACTIVE]);
    }
}