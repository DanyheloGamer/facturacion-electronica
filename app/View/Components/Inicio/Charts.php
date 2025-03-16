<?php

namespace App\View\Components\Inicio;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Charts extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $colores = [
            '#0080f8',
            '#f94144',
            '#90be6d',
            '#f9c74f',
            '#156b95',
            '#43aa8b',
            '#ff5832',
            '#cd925a',
            'orange',
            'gold'
        ];
        $productos = [];

        return view(
            'components.inicio.charts',
            compact('colores', 'productos')
        );
    }
}
