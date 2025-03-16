<?php

namespace App\Http\Controllers\Configuracion;

use App\Http\Controllers\Controller;
use App\Services\Configuracion\CajaService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CajaController extends Controller
{
    protected CajaService $cajaService;

    public function __construct()
    {
        $this->cajaService = new CajaService();
    }

    public function index(): View
    {
        $cajas = $this->cajaService->getAllPagination(1, 10, "");
        return view('configuracion.caja.index', compact('cajas'));
    }

    /**
     * @param Request $request
     * 
     * @return [type]
     */
    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'numero' => 'required|numeric',
            'ubicacion' => 'nullable|string|max:255',
        ], ['required' => '* Campo obligatorio']);

        try {
            $caja = $this->cajaService->crearCaja($datos);
            return response()->json([
                'ok' => 1,
                'mensaje' => 'Caja Registrada Satisfactoriamente'
            ], 200);
            //return redirect()->route('cajas.index')->with('success', 'Caja creada correctamente');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }
}