<?php

namespace App\Listeners;

use Aacotroneo\Saml2\Events\Saml2LoginEvent;
use Auth;
class Saml2LoginEventListener
{
    public function __construct()
    {
    }

    public function handle(Saml2LoginEvent $event){

        if(!Auth::check()) {
            $user = $event->getSaml2User();
            $attributes = $user->getAttributes();
            if (!isset($attributes['PersonImmutableID'][0])) {
                logger()->error('kwuid not found', json_encode($attributes));
                session()->flash('kwuid not found', json_encode($attributes));

                return redirect()->route('error');
            }
            Auth::loginUsingId($attributes['PersonImmutableID'][0], true);
        }
    }

}