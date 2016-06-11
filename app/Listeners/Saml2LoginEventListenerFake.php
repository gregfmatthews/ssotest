<?php

namespace App\Listeners;

use Aacotroneo\Saml2\Events\Saml2LoginEvent;
use Auth;
use Config;
class Saml2LoginEventListenerFake
{
    public function __construct()
    {
    }

    public function handle(Saml2LoginEvent $event){


            Auth::loginUsingId(Config('kwuapi.testid'));
        
    }

}