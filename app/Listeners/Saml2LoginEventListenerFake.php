<?php

namespace App\Listeners;

use App\Events\FakeSamlEvent;
use Auth;
use Config;
class Saml2LoginEventListenerFake
{
    public function __construct()
    {
    }

    public function handle(FakeSamlEvent $event){


            Auth::loginUsingId(Config('kwuapi.testid'));
        
    }

}