<?php

namespace App\Controller;

use Accolon\Route\Request;
use Accolon\Route\Response;
use Pendragon\Framework\Auth\AuthToken;
use Pendragon\Framework\Auth\IAuth;
use Pendragon\Framework\Validator;

class AuthController extends Controller
{
    private IAuth $auth;

    public function __construct()
    {
        $this->auth = new AuthToken;
    }

    public function register(Request $request, Response $response)
    {
        Validator::request($request, [
            "user" => "string",
            "password" => "string"
        ]);

        return $response->json($this->auth->generate([
            "user" => $request->get("user"),
            "password" => $request->get("password")
        ]));
    }
}
