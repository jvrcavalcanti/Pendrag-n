<?php

namespace App\Model;

use Accolon\Izanami\Model;
use Pendragon\Framework\Auth\HasApiToken;

class User extends Model
{
    use HasApiToken;

    protected string $table = "users";

    protected array $sensitives = ['password'];
}
