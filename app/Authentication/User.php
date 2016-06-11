<?php

namespace App\Authentication;
use Illuminate\Contracts\Auth\Authenticatable;

class User implements Authenticatable
{
    public function getAuthIdentifier()
    {
        return $this->kwuid;
    }
    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
    }
    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
    }
    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }
    public function getAuthIdentifierName()
    {
        return 'kwuid';
    }
    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
    }
}