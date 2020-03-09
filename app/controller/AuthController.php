<?php

namespace App\Controller;

use Accolon\Route\Request;
use Accolon\Route\Response;
use Accolon\Token\Token;

class AuthController
{
    public function login(Request $request, Response $response)
    {
        return $response->json([
            "token" => Token::make([$request->get("user"), $request->get("password")])
        ]);
    }
}