<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    public function __construct(
        public string $color = 'primary',
        public bool $pill = false,
    ) {}

    public function badgeClass(): string
    {
        $colors = [
            'primary'   => 'text-bg-primary',
            'secondary' => 'text-bg-secondary',
            'success'   => 'text-bg-success',
            'danger'    => 'text-bg-danger',
            'warning'   => 'text-bg-warning text-dark',
            'info'      => 'text-bg-info text-dark',
            'red'       => 'text-white',
        ];
        return $colors[$this->color] ?? 'text-bg-secondary';
    }

    public function render()
    {
        return view('components.badge');
    }
}
