<!DOCTYPE html>
<html lang=lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.partial.head')
    <body>
        <div id="app">
            <header class="common-header">
                <div class="container">
                    <div class="logo-container">
                        <a href="{{route('home')}}" title="Mango">
                            <img src="{{asset("images/logs/logo.png")}}" alt="Mango Logo" style="width: 65%;">
                        </a>
                    </div>
                    <nav class="header-nav">
                        <ul>
                            <li><a href="#">More</a>
                                <ul class="sub-menu">
                                    <li><a href="#">111</a></li>
                                    <li><a href="#">222</a></li>
                                    <li><a href="#">333</a></li>
                                </ul>
                            </li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            @yield('content')
            <footer>
                <div class="container">
                    <p>footer</p>
                </div>
            </footer>
        </div>
        @include('layouts.partial.modals')
        @include('layouts.partial.js')
    </body>
</html>