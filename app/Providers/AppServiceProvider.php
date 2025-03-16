<?php

namespace App\Providers;

use App\Services\EmpresaService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        view()->composer('components.header', function ($view) {
            $empresa = (new EmpresaService())->getByRuc(config('app.ruc_empresa'));
            $view->with('empresa', $empresa);
        });
    }
}