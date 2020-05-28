<?php

namespace App\Controller;

use Accolon\DataLayer\Model;
use Accolon\Route\AbstractController;

class Controller extends AbstractController
{
    protected Model $service;

    public function __construct(?Model $model = null)
    {
        $this->service ??= $model;
    }
}