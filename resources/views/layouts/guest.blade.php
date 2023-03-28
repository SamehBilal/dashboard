<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Begin page -->
        @include('components.backend.meta-tags')

        <!-- Begin page -->
        <title>{{ config('app.name', 'Sameh Bilal') }}</title>

        <!-- Begin page -->
        @include('components.backend.default-styles')

        <!-- Begin page -->
        @yield('extra_styles')

    </head>

    <body class="loading authentication-bg" data-layout-config='{"darkMode":true}'>
        {{ $slot }}

        <footer class="footer footer-alt">
            {{ date('Y') }} © Sameh Bilal
        </footer>

         <!-- Begin page -->
         @include('components.backend.default-scripts')

         <!-- Begin page -->
         @yield('extra_script')

    </body>
</html>
