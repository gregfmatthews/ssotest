<?php

namespace App\Authentication;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kwuid',
    ];

    public function getAuthIdentifier()
    {
        return $this->kwuid;
    }

    public function getAuthIdentifierName()
    {
        return 'kwuid';
    }

}