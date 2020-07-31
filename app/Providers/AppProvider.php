<?php

namespace App\Providers;

use App\Repositories\IUserRepository;
use App\Repositories\Izanami\UserRepositoryIzanami;
use Pendragon\Framework\Provider;

class AppProvider extends Provider
{
    public function boot()
    {
        app()->bind(IUserRepository::class, UserRepositoryIzanami::class);
    }
}
