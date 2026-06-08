<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public function __construct(
        public string $title = '',
        public string $footer = '',
        public string $padding = '4',
    ) {}

    public function render()
    {
        return view('components.card');
    }
}
