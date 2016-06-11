<?php


namespace App\Authentication;
use Illuminate\Contracts\Auth\UserProvider as IlluminateUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Guzzle;
use Config;
use Auth;
use Cache;

class UserProvider implements IlluminateUserProvider
{
    public function retrieveByToken($identifier, $token)
    {
        // TODO: Implement retrieveByToken() method.
    }
    public function retrieveById($identifier)
    {

        return Cache::remember('userById_',$identifier,60, function() use ($identifier) {
            $id = $identifier == 334116 ? 42968 : $identifier;
            logger()->info('fetching');
            $response = Guzzle::post(Config('kwuapi.getmarketcenterurl'), [
                'headers' => ['x-api-key' => Config('kwuapi.key')],
                'json' => ['kwuid' => $id]
            ]);
            $marketcenters = json_decode($response->getBody(1));
            $user = new User();
            $user->kwuid = $identifier;
            $user->markercenters = $marketcenters;

            return $user;
        });

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