<?php

namespace App\Providers;

use Pendragon\Framework\Auth\AuthJWT;
use Pendragon\Framework\Auth\AuthToken;
use Pendragon\Framework\Auth\IAuth;
use Pendragon\Framework\Provider;

class AuthProvider extends Provider
{
    public function boot()
    {
        app()->bind(IAuth::class, AuthJWT::class);
    }
}
