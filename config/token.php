<?php

use Accolon\Token\Token;

Token::config(
    env("KEY"),
    1,
    "md5"
);