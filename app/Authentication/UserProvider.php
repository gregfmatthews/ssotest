<?php


namespace App\Authentication;
use Illuminate\Contracts\Auth\UserProvider as IlluminateUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Guzzle;
use Config;

class UserProvider implements IlluminateUserProvider
{
    public function retrieveByToken($identifier, $token)
    {
        // TODO: Implement retrieveByToken() method.
    }
    public function retrieveById($identifier)
    {

        $response = Guzzle::post(Config('kwuapi.getmarketcenterurl'),['headers'=>['x-api-key'=>Config('kwuapi.key')]],json_encode(['kwuid'=>$identifier]));
        $marketcenters = json_decode($response->getBody(1));
        print_r($response);
        print_r($marketcenters);
        die();
        $user = new User();
        $user->kwuid = 42968;

        return $user;
    }
    public function updateRememberToken(Authenticatable $user, $token)
    {
        // TODO: Implement updateRememberToken() method.
    }
    public function retrieveByCredentials(array $credentials)
    {
        // TODO: Implement retrieveByCredentials() method.
    }
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        // TODO: Implement validateCredentials() method.
    }
}