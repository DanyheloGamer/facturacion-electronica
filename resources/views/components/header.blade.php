<header class="main-header cabecera-m">
    <!-- Logo -->
    <a href="dashboard" class="logo">
        <span class="logo-mini">
            <img src="{{ $empresa ? asset('storage/' . $empresa->foto) : asset('img/logo/logo.png') }}" alt=""
                width="50px">
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>{{ $empresa ? $empresa->nombre_comercial : 'Mi Empresa' }}</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top cabecera-m">
        <!-- Sidebar toggle button-->
        <button class="btn btn-success  btn-menup" data-toggle="push-menu" role="button">
            <i class="fas fa-align-justify fa-lg"></i>
        </button>
        <button class="btn-modo-sistema <?= config('app.env') == 'development' ? 'btnprueba' : '' ?>">
            DESARROLLO
        </button>

        {{-- <button class="btn btn-danger btn-menup dia" onclick="changep(1)" idp="claro"></button>
        <button class="btn btn-danger btn-menup noche" onclick="changep(2)" idp="oscuro"></button>
        <button class="btn btn-primary" id="tipocambio"></button> --}}
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="far fa-bell"></i>
                        <span class="label label-warning no-enviados"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header no-enviados-text"></li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua "></i>
                                        <span class="no-enviados-items"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="ventas">Ver todos</a></li>
                    </ul>
                </li>
                <!-- fin notification ===================== -->

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @auth
                            @if (Auth::user()->profile_photo_url)
                                <img src="{{ asset(Auth::user()->profile_photo_url) }}" class="user-image" alt="User Image">
                            @endif
                        @else
                            <img src="{{ asset('img/man_default.svg') }}" class="user-image" alt="User Image">
                        @endauth
                        <span class="hidden-xs">
                            @auth
                                {{ Auth::user()->name }}
                            @else
                                {{ 'Invitado' }}
                            @endauth
                        </span>
                    </a>
                    <ul class="dropdown-menu menu-user" style="width: 200px; color:black;">

                        <!-- Menu Body -->
                        <li class="">
                            <a href="usuarios">
                                <i class="fas fa-user fa-lg" style="color:royalblue"> </i> <span class="mg-menu">Mi
                                    perfil</span>

                            </a>
                        </li>
                        <li class="">
                            <a href="empresa">
                                <i class="fas fa-cog  fa-lg" style="color:royalblue"> </i> <span
                                    class="mg-menu">Configurar empresa</span>

                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('logout') }}" class=""
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt fa-lg" style="color:tomato"></i>
                                <span class="mg-menu"> Salir </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
