<?php

use Aacotroneo\Saml2\Events\Saml2LoginEvent;
class Saml2LoginEventListener
{
    public function __construct()
    {
    }

    public function handle(Saml2LoginEvent $event){
        $user = $event->getSaml2User();
        dd($user);
        die();
    }

}