<?php

namespace App\View\Components\Inicio;

use Closure;
use DateTime;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderCalendar extends Component
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
        $fecha1 = date('Y-m') . '-01';
        $fecha2 = date('Y-m-d');
        $datetime1 = new DateTime($fecha1);
        $datetime2 = new DateTime($fecha2);
        $interval = $datetime1->diff($datetime2);
        $diferencia = $interval->format('%a');
        $fecha_actual = date('d-m-Y');
        $hoy = date('d/m/Y');
        $ayer = date('d/m/Y', strtotime($fecha_actual . '- 1 days'));
        $semana = date('d/m/Y', strtotime($fecha_actual . '- 1 week'));
        $mes = date('d/m/Y', strtotime($fecha_actual . "- $diferencia days"));
        $anio = date('d/m/Y', strtotime($fecha_actual . '- 1 year'));

        return view(
            'components.inicio.header-calendar',
            compact(
                'fecha1',
                'fecha2',
                'datetime1',
                'datetime2',
                'interval',
                'diferencia',
                'fecha_actual',
                'hoy',
                'ayer',
                'semana',
                'mes',
                'anio'
            )
        );
    }
}
