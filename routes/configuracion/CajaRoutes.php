<?php

use App\Http\Controllers\Configuracion\CajaController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth'
])->group(function () {
    Route::group(['prefix' => 'cajas'], function () {
        Route::get('/', [CajaController::class, 'index'])->name('cajas.index');
        Route::post('/', [CajaController::class, 'store'])->name('cajas.store');
    });
});