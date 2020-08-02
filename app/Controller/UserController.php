<?php

namespace App\Controller;

use Accolon\Route\Request;
use Accolon\Route\Response;
use App\Repositories\IUserRepository;

class UserController
{
    private IUserRepository $repository;

    public function __construct(IUserRepository $repository)
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
