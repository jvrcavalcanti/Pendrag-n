<?php

use Accolon\Template\Template;

function dd($var) {
    var_dump($var);
    die();
}

function component($name, $options = []) {
    $name = "\\App\\Components\\{$name}";
    $component = new $name($options);
    $component->render("../resources/components");
}

function deldir($dir) {
    $files = array_diff(scandir($dir), array('.','..'));
        
    foreach ($files as $file) {
        (is_dir("$dir/$file")) ? deldir("$dir/$file") : unlink("$dir/$file");
    }
    rmdir($dir);
}

function path($path){
    return "../" . $path . "/";
}

function img($path) {
    $arr = array_reverse(explode("/", path('resources/images') . $path));
    $newPath = "images/{$arr[0]}";
    if(is_dir("images") === false) {
        mkdir("images");
    }
    if(!file_exists($newPath)) {
        copy(path('resources/images') . $path, $newPath);
    }
    return $newPath;
}


function view($path, $title = "Pendragon") {
    $tcp = new Template(path("resources/view") . $path . "/index.php");

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