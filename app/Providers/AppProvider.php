<?php

namespace App\Providers;

use App\Repositories\IUserRepository;
use App\Repositories\Izanami\UserRepositoryIzanami;
use Accolon\Route\Provider;

class AppProvider extends Provider
{
    public function boot()
    {
        //
    }
}
