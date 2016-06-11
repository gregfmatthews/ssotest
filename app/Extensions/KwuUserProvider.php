<?php
/**
 * Created by PhpStorm.
 * User: gregmatthews
 * Date: 6/10/16
 * Time: 4:48 PM
 */

namespace App\Extensions;



use Illuminate\Contracts\Auth\Authenticatable;
use GuzzleHttp\Client;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Foundation\Auth\User;

class KwuUserProvider implements UserProvider
{
    private $settings;
    private $user;
    public function __construct($settings, User $user)
    {
        $this->settings = $settings;
        $this->user = $user;
    }

    public function retrieveByCredentials(array $credentials)
    {
        // TODO: Implement retrieveByCredentials() method.
    }
    public function retrieveById($identifier)
    {
        $guzzle = new Client();
        $response = $guzzle->post($this->settings['getMarketCenters'],['x-api-key'=>$this->settings['key']],json_encode(['kwuid'=>$identifier]));
        $marketcenters = json_decode($response->getBody(1));
        print_r($response);
        print_r($marketcenters);
        die();

    }
    public function retrieveByToken($identifier, $token)
    {
        // TODO: Implement retrieveByToken() method.
    }
    public function updateRememberToken(Authenticatable $user, $token)
    {
        // TODO: Implement updateRememberToken() method.
    }
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        // TODO: Implement validateCredentials() method.
    }

}