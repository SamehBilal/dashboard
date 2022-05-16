<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Begin page -->
        @include('components.backend.meta-tags')

        <!-- Begin page -->
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Begin page -->
        @include('components.backend.default-styles')

        <!-- Begin page -->
        @yield('extra_styles')

    </head>

    <body class="loading" data-layout="detached" data-layout-config='{"leftSidebarCondensed":false,"darkMode":true, "showRightSidebarOnStart": true}'>

        <!-- Begin page -->
        @include('components.backend.top-bar')

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- Begin page -->
            <div class="wrapper">

                <!-- Begin page -->
                @include('components.backend.main-drawer')

                <!-- Begin page -->
                <div class="content-page">

                    <!-- Begin page -->
                    @yield('content')

                    <!-- Begin page -->
                    @include('components.backend.footer')

                </div> <!-- content-page -->

            </div> <!-- end wrapper-->
        </div>
        <!-- END Container -->


        <!-- Right Sidebar -->
        @include('components.backend.settings')

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->

        <!-- Begin page -->
        @include('components.backend.default-scripts')

        <!-- Begin page -->
        @yield('extra_script')

    </body>
</html>
