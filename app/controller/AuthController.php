<?php

namespace App\Controller;

use Accolon\Route\Request;
use Accolon\Route\Response;
use App\Auth;

class AuthController extends Controller
{
    public function register(Request $request, Response $response)
    {
        return $response->send(Auth::encodeToken([
            "name" => "Accolon",
            "password" => "123456"
        ]));
    }
}