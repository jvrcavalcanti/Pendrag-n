<?php

namespace App\Controllers;

use Accolon\Route\Controller;
use Accolon\Route\Request;
use App\Model\User;

class UserController extends Controller
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index(Request $request)
    {
        return response()->json([
            'users' => []
        ]);
        return response()->send($this->user->all());
    }
}
