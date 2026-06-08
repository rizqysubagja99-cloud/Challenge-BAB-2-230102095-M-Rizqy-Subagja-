<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public function __construct(
        public string $variant = 'primary',
        public string $size = '',
        public string $href = '',
        public string $type = 'button',
        public bool $block = false,
    ) {}

    public function btnClass(): string
    {
        $base = 'btn';
        $variants = [
            'primary'   => 'btn-accent',
            'secondary' => 'btn-outline-secondary',
            'outline'   => 'btn-outline-dark',
            'danger'    => 'btn-danger',
            'success'   => 'btn-success',
            'light'     => 'btn-outline-light',
        ];
        $sizes = ['sm' => 'btn-sm', 'lg' => 'btn-lg'];
        $sizeClass = $sizes[$this->size] ?? '';
        $blockClass = $this->block ? 'w-100' : '';
        $variantClass = $variants[$this->variant] ?? 'btn-primary';
        return trim("$base $variantClass $sizeClass $blockClass");
    }

    public function render()
    {
        return view('components.button');
    }
}
