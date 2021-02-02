<div class="navbar-collapse collapse">
    <ul class="navbar-nav navbar-align">
        <li class="nav-item dropdown">
            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
                <div class="position-relative">
                    <i class="align-middle" data-feather="bell"></i>
                    <span class="indicator">1</span>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                <div class="dropdown-menu-header">
                    1 New Notifications
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <div class="row g-0 align-items-center">
                            <div class="col-2">
                                <i class="text-danger" data-feather="alert-circle"></i>
                            </div>
                            <div class="col-10">
                                <div class="text-dark">Update completed</div>
                                <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                <div class="text-muted small mt-1">30m ago</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="dropdown-menu-footer">
                    <a href="#" class="text-muted">Show all notifications</a>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
            </a>

            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                <img src="{{ asset('images/avatars/avatar.jpg') }}" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> 
                <span class="text-dark">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i> {{ __('Profile') }}</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="info"></i> {{ __('Information') }}</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="dropdown-item" href="logout" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="align-middle mr-1" data-feather="log-out"></i> {{ __('Logout') }}
                    </button>
                </form>
            </div>
        </li>
    </ul>
</div>