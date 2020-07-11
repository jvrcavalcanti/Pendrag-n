<?php

namespace App\Model;

use Accolon\DataLayer\Model;
use Pendragon\Framework\Auth\HasApiToken;

class User extends Model
{
    use HasApiToken;

    protected string $table = "users";
}
