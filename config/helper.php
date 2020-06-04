<?php

use Accolon\Route\Response;
use Accolon\Template\Template;
use Symfony\Component\Dotenv\Dotenv;

function component($name, $options = []) {
    $name = "\\App\\Components\\{$name}";
    $component = new $name($options);
    $component->render("../resources/components");
}

function path($path){
    return "../" . $path . "/";
}

// function badrequest(\Accolon\Route\Request $request, array $fields): bool
// {
//     foreach($fields as $field) {
//         if(!$request->get($field)) {
//             return true;
//         }
//     }

//     return false;
// }

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

function response(): Response {
    return new Response;
}

function redirect($path) {
    global $app;
    $app->redirect($path);
}

function env(string $attr): ?string {
    (new Dotenv())->load(APP_ROOT . ".env");
    return $_ENV[$attr];
}


function view($path, array $data = []) {
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

    $css = path("resources/view") . $path . "/style.";

    if (file_exists(path("resources/view") . $path . "/style." . "css")) {
        $css .= "css";
    }

    if (file_exists(path("resources/view") . $path . "/style." . "scss")) {
        $css .= "scss";
    }

    $tcp->css($css)
        ->js(path("resources/view") . $path .  "/main.js")
        ->title(VIEW["title"])
        ->lang(VIEW["lang"])
        ->fecth($data);
}