<li class="dropdown notification-list">
    <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true"
        aria-expanded="false">
        <span class="account-user-avatar">
            <img src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" alt="user-image" class="rounded-circle">
        </span>
        <span>
            <span class="account-user-name">Dominic Keller</span>
            <span class="account-position">Founder</span>
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
        <!-- item-->
        <div class=" dropdown-header noti-title">
            <h6 class="text-overflow m-0">Welcome !</h6>
        </div>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="mdi mdi-account-circle me-1"></i>
            <span>My Account</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="mdi mdi-account-edit me-1"></i>
            <span>Settings</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="mdi mdi-lifebuoy me-1"></i>
            <span>Support</span>
        </a>

        <!-- item-->
        <a href="javascript:void(0);" class="dropdown-item notify-item">
            <i class="mdi mdi-lock-outline me-1"></i>
            <span>Lock Screen</span>
        </a>

        <!-- item-->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a  href="route('logout')"
                onclick="event.preventDefault();
                        this.closest('form').submit();" class="dropdown-item notify-item">
                <i class="mdi mdi-logout me-1"></i>
                <span>{{ __('Log Out') }}</span>
            </a>
        </form>

    </div>
</li>
