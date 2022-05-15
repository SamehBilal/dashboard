<!DOCTYPE html>
<html lang="en">
    <head>
        @include('components.backend.meta-tags')

        <title>Analytics Dashboard | Dashboard</title>

        @include('components.backend.default-styles')

        @yield('extra_styles')

    </head>

    <body class="loading" data-layout="detached" data-layout-config='{"leftSidebarCondensed":false,"darkMode":true, "showRightSidebarOnStart": true}'>

    @include('components.backend.top-bar')

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- Begin page -->
            <div class="wrapper">

               @include('components.backend.main-drawer')

                <div class="content-page">

                    @yield('content')

                    @include('components.backend.footer')

                </div> <!-- content-page -->

            </div> <!-- end wrapper-->
        </div>
        <!-- END Container -->


        <!-- Right Sidebar -->
        @include('components.backend.settings')

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->


        @include('components.backend.default-scripts')

        @yield('extra_script')

    </body>
</html>
