<ul class="sidebar-nav">
    <!-- <li class="sidebar-header">
        Menu Utama
    </li> -->
    <li class="sidebar-header">HEADER 1</li>
    <li class="sidebar-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('dashboard') }}">
            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">{{ __('Dashboard')}}</span>
        </a>
    </li>

    <li class="sidebar-item {{ request()->is('page-one') || request()->is('page-two') ? 'active' : '' }}">
        <a href="#permohonan" data-toggle="collapse" class="sidebar-link collapsed">
            <i class="align-middle" data-feather="file"></i> <span class="align-middle">{{ __('Pages')}}</span>
        </a>
        <ul id="permohonan" class="sidebar-dropdown list-unstyled collapse {{ request()->is('page-one') || request()->is('page-two')  ? 'show' : '' }}" data-parent="#sidebar">
            <li class="sidebar-item {{ request()->is('page-one') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('page-one') }}">{{ __('Page 1')}}</a>
            </li>
            <li class="sidebar-item {{ request()->is('page-two') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('page-two') }}">{{ __('Page 2')}}</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item {{ request()->is('page-three') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('page-three') }}">
            <i class="align-middle" data-feather="folder"></i> <span class="align-middle">{{ __('Page 3')}}</span>
        </a>
    </li>

    <li class="sidebar-item {{ request()->is('page-four') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('page-four') }}">
            <i class="align-middle" data-feather="user"></i> <span class="align-middle">{{ __('Page 4')}}</span>
        </a>
    </li>

    <li class="sidebar-header">HEADER 2</li>
    <li class="sidebar-item {{ request()->is('page-five') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('page-five') }}">
            <i class="align-middle" data-feather="book"></i> <span class="align-middle">{{ __('Page 5')}}</span>
        </a>
    </li>

    <li class="sidebar-header">HEADER 3</li>
    <li class="sidebar-item {{ request()->is('page-six') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('page-six') }}">
            <i class="align-middle" data-feather="users"></i> <span class="align-middle">{{ __('Page 6')}}</span>
        </a>
    </li>
    <li class="sidebar-item {{ request()->is('page-seven') || request()->is('page-eight') ? 'active' : '' }}">
        <a href="#bantuan" data-toggle="collapse" class="sidebar-link collapsed">
            <i class="align-middle" data-feather="info"></i> <span class="align-middle">Pages</span>
        </a>
        <ul id="bantuan" class="sidebar-dropdown list-unstyled collapse {{ request()->is('page-seven') || request()->is('page-eight') ? 'show' : '' }}" data-parent="#sidebar">
            <li class="sidebar-item {{ request()->is('page-seven') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('page-seven') }}">{{ __('Page 7')}}</a>
            </li>
            <li class="sidebar-item {{ request()->is('page-eight') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('page-eight') }}">{{ __('Page 8')}}</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link" href="#">
            <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">{{ __('Logout')}}</span>
        </a>
    </li>
</ul>