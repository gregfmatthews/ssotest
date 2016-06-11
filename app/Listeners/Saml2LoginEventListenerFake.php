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
            logger()->info('here');
            return redirect(config('saml2_settings.loginRoute'));
        
    }

}