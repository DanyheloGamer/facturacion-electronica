<x-guest-layout>
    <x-authentication-card>
        {{-- <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot> --}}


        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        {{-- <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form> --}}
        <div class="log-cont">

            <div class="login-box">
                <div class="login-box-body">

                    <div class="logo-empresa">
                        @php
                            $rand = rand(22, 99999);
                        @endphp
                        <img src="{{ asset('img/logo/logo.png') }}" alt="">
                    </div>

                    <p class="login-box-msg" style="display: none"></p>

                    <form class="login-u" id="form-login" method="POST" action="{{ route('login') }}">
                        @csrf
                        {{-- <input type="hidden" id="conectado" name="conectado" value="<?php echo $respuesta; ?>">
                        <input type="hidden" id="cpublica" value="<?php echo @$emisor['clavePublica']; ?>"> --}}
                        <div class="form-group has-feedback">
                            <x-input type="text" class="form-control" placeholder="Usuario" name="name"
                                id="name" autocomplete="off" />
                            {{-- <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario"
                                id="ingUsuario" autocomplete="off"> --}}
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback" style="margin:0px !important">
                            <x-input type="password" class="form-control" placeholder="Contraseña" name="password"
                                id="password" />
                            {{-- <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword"
                                id="ingPassword"> --}}
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>

                        <div class="row">
                            <div class="content-fluid" style="background: #fff !important;">
                                {{-- @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif --}}
                                <x-button type="submit" class="btn-flat" id="logUser">
                                    Ingresar al sistema <i class="fas fa-angle-double-right fa-lg"></i>
                                </x-button>
                                {{-- <button type="button" class="btn-flat" id="logUser">Ingresar al sistema <i
                                        class="fas fa-angle-double-right fa-lg"></i></button> --}}
                            </div>
                        </div>
                        <div id="resultLogin" style="display: none;"></div>
                    </form>
                    <x-validation-errors class="mb-4" />

                    <div class="verifica-sunat"><img src="{{ asset('img/verificacion.png') }}" alt=""></div>
                </div>
            </div>
        </div>
        <div id="fondP">
            <div class="fnd"></div>
        </div>
    </x-authentication-card>
</x-guest-layout>
