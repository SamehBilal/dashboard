 <!-- Topbar Start -->
 <div class="navbar-custom topnav-navbar topnav-navbar-dark">
    <div class="container-fluid">

        @include('components.backend.logo')

        <ul class="list-unstyled topbar-menu float-end mb-0">

            @include('components.backend.search')

            @include('components.backend.language')

            @include('components.backend.notifications')

            @include('components.backend.top-bar-menu')

            <li class="notification-list">
                <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                    <i class="dripicons-gear noti-icon"></i>
                </a>
            </li>

            @include('components.backend.profile')

        </ul>
        <a class="button-menu-mobile disable-btn">
            <div class="lines">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>

        @include('components.backend.search-results')
    </div>
</div>
<!-- end Topbar -->
