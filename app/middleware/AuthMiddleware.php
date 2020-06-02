<?php

namespace App\Middleware;

use Accolon\Route\Middleware;
use Accolon\Route\Request;
use Accolon\Route\Response;
use App\Auth;
use Closure;

class AuthMiddleware implements Middleware
{
    public function handle(Request $request, Response $response, Closure $next): ?string
    {
        if (!$request->getAuthorization()
        || preg_match('/Bearer\s(\S+)/', $request->getAuthorization()) === 0
        || !Auth::checkToken(Auth::getToken($request))) {
            return $response->send([
                "message" => "Invalid token"
            ], 401);
        }

        return $next($request, $response);
    }
}