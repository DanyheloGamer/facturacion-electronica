@props(['activeRole', 'menuItems'])
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class=" user-panel2">
            <div class=" image">
                @auth
                    @if (Auth::user()->profile_photo_url)
                        <img src="{{ asset(Auth::user()->profile_photo_url) }}" class="img-circle img-user" alt="User Image">
                    @endif
                @else
                    <img src="{{ asset('img/man_default.svg') }}" class="img-circle img-user" alt="User Image">
                @endauth
            </div>
            <div class=" info">
                @auth
                    <p>
                        {{ Auth::user()->name }}
                    </p>
                    <a href="#" class="btn btn-primary btn-sm boton-user">
                        <i class="fas fa-user icon-user"></i>
                        <b>{{ $activeRole->name }}</b>
                    </a>
                @else
                    <p>
                        Invitado
                    </p>
                    <a href="#" class="btn btn-primary btn-sm boton-user">
                        <i class="fas fa-user icon-user"></i>
                        <b>Invitado</b>
                    </a>
                @endauth
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            {{-- 
            <li class=" menu-ini-p">
                <a href="dashboard">
                    <i class="fas fa-home fa-lg bg-menu"></i>
                    <span class="mg-menu"> Inicio</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li> --}}
            @forelse($menuItems as $menu)
                @if (count($menu->subMenus) > 0)
                    <li class="treeview">
                        <a href="#">
                            <i class="{{ $menu->icono }} fa-lg"></i>
                            <span class="mg-menu">
                                {{ $menu->modulo }}
                            </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            @foreach ($menu->subMenus as $subMenu)
                                <li>
                                    <a href="{{ $subMenu->enlace }}">
                                        <i class="{{ $subMenu->icono }}"></i> {{ $subMenu->modulo }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="{{ isActiveRequest($menu->enlace) ? 'active' : '' }}">
                        <a href="{{ $menu->enlace }}">
                            <i class="{{ $menu->icono }} fa-lg"></i>
                            <span class="mg-menu">
                                {{ $menu->modulo }}
                            </span>
                        </a>
                    </li>
                @endif
            @empty
            @endforelse
        </ul>
    </section>
</aside>
