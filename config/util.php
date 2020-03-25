<?php

function deldir($dir) {
    $files = array_diff(scandir($dir), array('.','..'));
        
    foreach ($files as $file) {
        (is_dir("$dir/$file")) ? deldir("$dir/$file") : unlink("$dir/$file");
    }
    rmdir($dir);
}

function filesdir($path) {
    $d = dir($path);
    $files = [];
    while(false !== ($entry = $d->read())) {
        if($entry != "." and $entry != "..") {
            $files[] = $entry;
        }
    }
    return $files;
}