<?php

namespace App\Controller;

use Accolon\Route\Request;
use App\Repositories\UserRepository;

class UserController
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        return response()->json([
            'users' => []
        ]);
        return response()->send($this->repository->all());
    }
}
