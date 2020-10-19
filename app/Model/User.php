<?php

namespace App\Model;

use Pendragon\Framework\Auth\Authenticatable;

class User extends Authenticatable
{
    protected array $sensitives = ['password'];
}
