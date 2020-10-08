<?php

namespace App\Providers;

use Pendragon\Framework\Auth\AuthJWT;
use Pendragon\Framework\Auth\AuthToken;
use Pendragon\Framework\Auth\IAuth;
use Accolon\Route\Provider;

class AuthProvider extends Provider
{
    public function register()
    {
        container()->bind(IAuth::class, AuthJWT::class);
    }
}
