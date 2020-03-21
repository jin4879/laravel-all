<!DOCTYPE html>
<html lang=lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.partial.head')
    <body>
        <div id="app">
            @yield('content')
        </div>
    </body>
</html>