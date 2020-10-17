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
            
                <li class="menu-item">
                    <a href="javascript:void(0)" class="side-menu">
                        <span><i class="ti-layout-media-right-alt"></i>Blog</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{{ route('admin.posts.index') }}">Todos los posts </a>
                        </li>
                        @can('posts.create')
                            <li>
                                <a href="{{ route('admin.posts.create') }}">Crear un post</a>
                            </li>
                        @endcan
                    </ul>
                </li>

            @if(auth()->user()->can('users.index') || auth()->user()->can('users.create'))
                <li class="menu-item">
                    <a href="javascript:void(0)" class="side-menu">
                        <span><i class="ti-user"></i>Usuarios</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <ul class="submenu">
                        @can('users.index')
                            <li>
                                <a href="{{ route('admin.users.index') }} ">Todos los usuarios </a>
                            </li>
                        @endcan
                        @can('users.create')
                            <li>
                                <a href="{{ route('admin.users.create') }}">Crear un usuario</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @else   
                <li class="menu-item">
                    <a href="{{ route('admin.users.index') }}">
                        <span><i class="ti-user"></i>Mi usuario</span>
                    </a>
                </li>
            @endif
            
            @if(auth()->user()->can('roles.index') || auth()->user()->can('roles.create'))
                <li class="menu-item">
                    <a href="javascript:void(0)" class="side-menu">
                        <span><i class="ti-hand-open"></i>Roles</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <ul class="submenu">
                        @can('roles.index')
                            <li>
                                <a href="{{ route('admin.roles.index') }} ">Todos los roles </a>
                            </li>
                        @endcan
                        @can('roles.create')
                            <li>
                                <a href="{{ route('admin.roles.create') }}">Crear un role</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endif
            @can('permissions.index')
                <li class="menu-item">
                    <a href="{{ route('admin.permissions') }}">
                        <span><i class="ti-key"></i>Permisos</span>
                    </a>
                </li>
            @endcan
        </ul>
    </div>
</div>
