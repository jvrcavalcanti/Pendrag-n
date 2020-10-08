<?php

namespace App\Repositories;

use App\Model\User;

class UserRepository
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
