<?php

use Illuminate\Support\Facades\Route;


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(['prefix' => 'admin'], function () {
//     Route::get('/menu-rapido', function () {
//         return view('components/admin/menu-rapido');
//     })->name('menu.rapido');
// });

Route::prefix('admin')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/menu-rapido', function () {
        return view('components/admin/menu-rapido');
    })->name('menu.rapido');
});