<?php

namespace App\Controller;

use Accolon\Route\Request;
use Accolon\Route\Response;
use App\Model\User;

class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct(new User());
    }

    public function index(Request $request, Response $response)
    {
        return $response->send($this->service->all());
    }
}