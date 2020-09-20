<div class="sidebar">
    <div class="sidebar-brand">
        <h4><i class="fab fa-airbnb"></i>Airbnb</h4>
        <i class="fas fa-times close-btn"></i>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li class="menu-item">
                <a href="{{ route('admin') }}">
                    <span><i class="ti-home"></i>Inicio</span>
                </a>
            </li>
            @if (auth()->user()->hasPermissionTo('posts.index') || auth()->user()->hasPermissionTo('posts.create'))
                <li class="menu-item">
                    <a href="javascript:void(0)" class="side-menu">
                        <span><i class="ti-layout-media-right-alt"></i>Blog</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <ul class="submenu">
                        @can('posts.index', auth()->user())
                            <li>
                                <a href="{{ route('admin.posts') }}">Todos los posts </a>
                            </li>
                        @endcan
                        @can('posts.create', auth()->user())
                            <li>
                                <a href="{{ route('admin.posts.create') }}">Crear un post</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif

            @if(auth()->user()->hasRole('admin'))
                <li class="menu-item">
                    <a href="javascript:void(0)" class="side-menu">
                        <span><i class="ti-user"></i>Usuarios</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('admin.users') }} ">Todos los usuarios </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.users.create') }}">Crear un usuario</a>
                        </li>
                    </ul>
                </li>
            @elseif(auth()->user()->hasPermissionTo('users.index'))   
                <li class="menu-item">
                    <a href="{{ route('admin.users') }}">
                        <span><i class="ti-user"></i>Mi usuario</span>
                    </a>
                </li>
            @endif
            @if(auth()->user()->hasPermissionTo('roles.index') || auth()->user()->hasPermissionTo('roles.create'))
                <li class="menu-item">
                    <a href="javascript:void(0)" class="side-menu">
                        <span><i class="ti-hand-open"></i>Roles</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <ul class="submenu">
                        @can('roles.index', auth()->user())
                            <li>
                                <a href="{{ route('admin.roles') }} ">Todos los roles </a>
                            </li>
                        @endcan
                        @can('roles.create', auth()->user())
                            <li>
                                <a href="{{ route('admin.roles.create') }}">Crear un role</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            @can('permissions.index', auth()->user())
                <li class="menu-item">
                    <a href="{{ route('admin.permissions') }}">
                        <span><i class="ti-key"></i>Permisos</span>
                    </a>
                </li>
            @endcan
        </ul>
    </div>
</div>
