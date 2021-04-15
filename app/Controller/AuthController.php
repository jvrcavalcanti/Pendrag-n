<?php

namespace App\Controller;

use Accolon\Route\Attributes\Route;
use Accolon\Route\Controller;
use Accolon\Route\Request;

class AuthController extends Controller
{
    #[Route('/auth/register')]
    public function register(Request $request)
    {
        $this->validate([
            'user' => 'string',
            'password' => 'string'
        ]);

        return response()->json([
            'token' => auth()->generate([
                "user" => $request->get("user"),
                "password" => $request->get("password")
            ])
        ]);
    }
}
