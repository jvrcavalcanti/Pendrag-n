<?php

namespace App\Repositories\Izanami;

use App\Model\User;
use App\Repositories\IUserRepository;

class UserRepositoryIzanami implements IUserRepository
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function all()
    {
        return $this->user->all();
    }
}
