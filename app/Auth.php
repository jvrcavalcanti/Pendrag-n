<?php

namespace App;

use Accolon\Token\Token;
use Accolon\Route\Request;

class Auth
{
    public static function encodeToken($data)
    {
        return Token::make($data);
    }

    public static function decodeToken($token)
    {
        return Token::extract($token);
    }

    public static function checkToken($token)
    {
        return Token::verify($token);
    }

    public static function getToken(Request $request): string
    {
        if(preg_match('/Bearer\s(\S+)/', $request->getAuthorization(), $matches)) {
            return $matches[1];
        }
    }
}