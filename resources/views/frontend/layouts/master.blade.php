<!doctype html>
<html class="no-js" lang="en">
    @include('frontend.includes.head')
    @yield('styles')

<body>

    @include('frontend.includes.header')

    @yield('content')

    @include('frontend.includes.footer')
    @include('frontend.includes.scripts')
    @yield('scripts')

</body>

</html>
