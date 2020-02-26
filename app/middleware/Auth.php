<?php

namespace App\Middleware;

use Accolon\Route\Middleware;
use Accolon\Route\Request;
use Accolon\Route\Response;

class Auth implements Middleware
{
    public function handle(Request $request, Response $response): bool
    {
        return true;
    }
}
