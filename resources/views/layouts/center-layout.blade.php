<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.includes.metaTages')
    <title>@yield('centerTitle')</title>
    @include('layouts.includes.styles')

</head>

<body>

    @include('layouts.includes.topbar')

    @include('layouts.includes.navbar')

    @yield('cont')

    @include('layouts.includes.backToTopButton')

    @include('layouts.includes.footer')

    @include('layouts.includes.scripts')


</body>
