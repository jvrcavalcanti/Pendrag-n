<?php

use Accolon\Template\Template;

function dd($var) {
    var_dump($var);
    die();
}

function view($path) {
    $tcp = new Template($path . "/index.html");
    $tcp->css($path . "/style.css")->js($path . "/main.js")->fecth();
}