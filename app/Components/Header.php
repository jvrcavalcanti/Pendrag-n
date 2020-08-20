<?php

namespace App\Components;

use Accolon\ViewComponents\Component;

class Header extends Component
{
    public function render(): string
    {
        return <<<TEMPLATE
        <header>
        </header>
        TEMPLATE;
    }
}
