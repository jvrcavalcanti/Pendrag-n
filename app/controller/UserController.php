<?php

namespace App\Controller;

use Accolon\Route\Request;
use Accolon\Route\Response;
use App\User;

class UserController
{
    public function index(Request $request, Response $response)
    {
        $user = new User();
        return $response->json($user->select()->get());
    }
}