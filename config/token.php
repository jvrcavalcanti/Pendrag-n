<?php

use Accolon\Token\Token;

Token::config(
    env("KEY"),
    env('TOKEN_HOURS'),
    env("TOKEN_HASH")
);