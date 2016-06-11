<?php

namespace App\Authentication;
use Auth;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function boot(GateContract $gate){

        $this->registerPolicies($gate);


        $gate->define('view-dash',function($user,$id){
            if($user->kwuid==$id){
                return true;
            }
            if(!empty($user->marketcenters)){
                return true;
            }
        });

        $gate->define('view-admin',function($user){
            if(!empty($user->marketcenters)){
                return true;
            }
        });

        Auth::provider('our_provider',function($app, array $config){
            return new UserProvider();
        });
    }
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}