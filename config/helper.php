<?php

use Accolon\Template\Template;

function dd($var) {
    var_dump($var);
    die();
}

function path($path){
    return "../" . $path . "/";
}

function view($path, $title = "Pendragon") {
    $tcp = new Template(path("resources/view") . $path . "/index.html");

    foreach(VIEW["preset"] as $preset) {
        $tcp->preset($preset);
    }

    foreach(VIEW["js"] as $js) {
        $tcp->lib("js", $js);
    }

    foreach(VIEW["css"] as $css) {
        $tcp->lib("css", $css);
    }

    $tcp->css(path("resources/view") . $path .  "/style.css")
        ->js(path("resources/view") . $path .  "/main.js")
        ->title($title)
        ->fecth();
}