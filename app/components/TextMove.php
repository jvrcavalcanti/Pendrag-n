<?php

namespace App\Components;

use Accolon\Template\Component;
use Accolon\Template\Template;

class TextMove implements Component
{
    private string $text;

    public function setText(string $text)
    {
        $this->text = $text;
    }

    public function attributes(): array
    {
        $arr = [];
        foreach($this as $key => $value) {
            $arr[$key]  = $value;
        }
        return $arr;
    }

    public function render(): void
    {
        $path = path("resources/components") . "TextMove/";
        $tcp = new Template($path . "index.php");
        $tcp->css($path . "style.css")
            ->js($path . "main.js")
            ->getBody($this);
    }
}