<?php

declare(strict_types=1);


namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class CustomLoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        // // Redirige a /admin/dashboard si el usuario es admin
        // if ($request->user()->isAdmin()) {
        //     return redirect()->intended('/admin/dashboard');
        // }

        // Redirige a /dashboard por defecto
        return redirect()->intended('/dashboard');
    }
}