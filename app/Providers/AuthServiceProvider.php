<?php

namespace App\Providers;

use App\User;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Extensions\KwuUserProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        //$this->registerPolicies($gate);
        Auth::provider('kwuuser',function($app, array $config){
           return new KwuUserProvider([
               'getMarketCenters'=>config('kwupai.getmarketcenterurl'),
               'key'=>config('kwupai.key')
           ],
           new User());
        });

        $gate->define('view-admin', function($user=null){
            return true;
        });

        //
    }
}
