<?php

namespace App\Controller;

use Accolon\Route\Request;
use Accolon\Route\Response;
use Pendragon\Framework\Auth\AuthToken;
use Pendragon\Framework\Auth\IAuth;

class AuthController extends Controller
{
    private IAuth $auth;

    public function __construct()
    {
        $this->auth = new AuthToken;
    }

    public function register(Request $request, Response $response)
    {
        return $response->send($this->auth->generate([
            "user" => md5(microtime(true)),
            "id" => sha1(microtime(true))
        ]));
    }
}
