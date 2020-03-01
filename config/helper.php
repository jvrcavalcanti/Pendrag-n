<?php

use Accolon\Template\Template;

function dd($var) {
    var_dump($var);
    die();
}

function view($path, $title = "Pendragon") {
    $tcp = new Template("../app/view/" . $path . "/index.html");
    foreach(VIEW["preset"] as $preset) {
        $tcp->preset($preset);
    }
    foreach(VIEW["js"] as $js) {
        $tcp->lib("js", $js);
    }
    foreach(VIEW["css"] as $css) {
        $tcp->lib("css", $css);
    }
    $tcp->css("../app/view/" . $path .  "/style.css")->js("../app/view/" . $path .  "/main.js")->title($title)->fecth();
}