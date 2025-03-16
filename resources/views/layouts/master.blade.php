<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <x-master.styles></x-master.styles>

</head>

<body class="hold-transition skin-blue sidebar-mini" translate="no">
    @auth
        <div class="reload-all" id="reload-all"></div>
        <div class="flex super-contenedor">
            <x-header></x-header>

            <x-sidebar :activeRole="$active_role" :menuItems="$role_config->menu_items"></x-sidebar>

            <div class="content-wrapper panel-medio-principal">
                <div style="padding:5px"></div>
                <section class="container-fluid">
                    <x-master.content-header></x-master.content-header>
                </section>
                <section class="container-fluid panel-medio">
                    {{ $slot }}
                </section>
            </div>

            <x-master.footer></x-master.footer>
        </div>
    @else
        {{ $slot }}
    @endauth

    <div class="connection"></div>

    <input type="hidden" class="" id="tipo_cambio" name="tipo_cambio" value="">
    <input type="hidden" class="" id="fecha" name="fecha" value="{{ date('Y-m-d') }}">

    <x-master.scripts></x-master.scripts>

    @stack('scripts')
</body>

</html>
