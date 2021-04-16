<?php

namespace App\Models;

use Pendragon\Framework\Auth\Authenticatable;

class User extends Authenticatable
{
    protected array $sensitives = ['password'];
}
