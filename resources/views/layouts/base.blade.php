<!DOCTYPE html>
<html lang=lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.partial.head')
    <body>
        <div id="app">
            <header class="header container">
                <h1><a href="/">Home logo</a></h1>
                <nav>글로벌 내비게이션</nav>
            </header>
            <main class="main container">
                @yield('content')
            </main>
            <footer class="footer container">
                footer
            </footer>
        </div>

        @include('layouts.partial.modals')
        @include('layouts.partial.js')
    </body>
</html>