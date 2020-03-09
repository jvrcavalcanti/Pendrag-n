<?php

namespace App\Middleware;

use Accolon\Route\Middleware;
use Accolon\Route\Request;
use Accolon\Route\Response;
use Accolon\Token\Token;

class Auth implements Middleware
{
    public function handle(Request $request, Response $response): bool
    {
        if(!$request->get("token")) {
            return false;
        }
        
        return Token::verify($request->get("token"));
    }
}
