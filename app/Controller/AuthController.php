<?php

namespace App\Controller;

use Accolon\Route\Request;
use Pendragon\Framework\Auth\IAuth;
use Pendragon\Framework\Util\Validator;

class AuthController
{
    public function register(Request $request)
    {
        Validator::request($request, [
            "user" => "string",
            "password" => "string"
        ]);

        return response()->json([
            'token' => auth()->generate([
                "user" => $request->get("user"),
                "password" => $request->get("password")
            ])
        ]);
    }
}
