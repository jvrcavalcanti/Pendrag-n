<?php

namespace App\Controller;

use Accolon\Route\Request;
use Accolon\Route\Response;
use App\Repositories\UserRepository;

class UserController
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request, Response $response)
    {
        return response()->json([
            'users' => []
        ]);
        return $response->send($this->repository->all());
    }
}
