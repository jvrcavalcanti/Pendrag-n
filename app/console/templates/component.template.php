<?php

namespace App\Components;

use Accolon\Template\Component;
use Accolon\Template\Template;

class className implements Component
{
    public function attributes(): array
    {
        return [];
    }

    public function render(): void
    {
        // $path = path("resources/components") . "TextMove/"; Example
        $path = path("resources/components");
        $tcp = new Template($path . "index.php");
        $tcp->css($path . "style.css")
            ->js($path . "main.js")
            ->getBody($this);
    }
}