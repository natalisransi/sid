<?php


namespace api\modules\v1\models;


class LoginForm extends \common\models\LoginForm
{
    public function login()
    {
        $user = $this->getUser();
        if ($this->validate()) {
            return $user->auth_key;
        }
        return false;
    }
}