<?php
/**
 * Created by PhpStorm.
 * User: gregmatthews
 * Date: 6/10/16
 * Time: 4:59 PM
 */

namespace App\Extensions;


use Illuminate\Contracts\Auth\Authenticatable;

class KwuUserAutenticatable implements Authenticatable
{
    public function getAuthIdentifier()
    {
        // TODO: Implement getAuthIdentifier() method.
    }
    public function getAuthIdentifierName()
    {
        return 'kwu_id';
    }
    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
    }
    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }
    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
    }
    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
    }
}