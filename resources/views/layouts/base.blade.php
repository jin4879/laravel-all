<!DOCTYPE html>
<html lang=lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.partial.head')
    <body>
        <div id="app">
            <div class="header-wrapper">
                <header>
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
            </div>
            @yield('content')
            <footer id="footer-wrapper">
                <div id="footer" class="container">
                    <div class="row">

                        <div class="span3">
                            <section class="widget">
                                <h3 class="title">How it works</h3>
                                <div class="textwidget">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </section>
                        </div>

                        <div class="span3">
                            <section class="widget"><h3 class="title">Categories</h3>
                                <ul>
                                    <li><a href="#" title="Lorem ipsum dolor sit amet,">Advanced Techniques</a></li>
                                    <li><a href="#" title="Lorem ipsum dolor sit amet,">Designing in WordPress</a></li>
                                    <li><a href="#" title="Lorem ipsum dolor sit amet,">Server &amp; Database</a></li>
                                    <li><a href="#" title="Lorem ipsum dolor sit amet, ">Theme Development</a></li>
                                    <li><a href="#" title="Lorem ipsum dolor sit amet,">Website Dev</a></li>
                                    <li><a href="#" title="Lorem ipsum dolor sit amet,">WordPress for Beginners</a></li>
                                    <li><a href="#" title="Lorem ipsum dolor sit amet, ">WordPress Plugins</a></li>
                                </ul>
                            </section>
                        </div>

                        <div class="span3">
                            <section class="widget">
                                <h3 class="title">Latest Tweets</h3>
                                <div id="twitter_update_list">
                                    <ul>
                                        <li>No Tweets loaded !</li>
                                    </ul>
                                </div>
                            </section>
                        </div>

                        <div class="span3">
                            <section class="widget">
                                <h3 class="title">Flickr Photos</h3>
                                <div class="flickr-photos" id="basicuse">
                                    <a href="https://live.staticflickr.com/3940/15647274066_2ee48c3fe9_b.jpg" title="Halloween 2014 at Envato in Melbourne" data-rel="prettyPhoto[flickrg]" rel="prettyPhoto[flickrg]"><img src="https://live.staticflickr.com/3940/15647274066_2ee48c3fe9_s.jpg" alt="Halloween 2014 at Envato in Melbourne"></a><a href="https://live.staticflickr.com/3945/15485436268_846ccca178_b.jpg" title="Halloween 2014 at Envato in Melbourne" data-rel="prettyPhoto[flickrg]" rel="prettyPhoto[flickrg]"><img src="https://live.staticflickr.com/3945/15485436268_846ccca178_s.jpg" alt="Halloween 2014 at Envato in Melbourne"></a><a href="https://live.staticflickr.com/3956/15668911091_4ef20118b5_b.jpg" title="Halloween 2014 at Envato in Melbourne" data-rel="prettyPhoto[flickrg]" rel="prettyPhoto[flickrg]"><img src="https://live.staticflickr.com/3956/15668911091_4ef20118b5_s.jpg" alt="Halloween 2014 at Envato in Melbourne"></a><a href="https://live.staticflickr.com/5605/15484954949_a4e97a9dc5_b.jpg" title="Halloween 2014 at Envato in Melbourne" data-rel="prettyPhoto[flickrg]" rel="prettyPhoto[flickrg]"><img src="https://live.staticflickr.com/5605/15484954949_a4e97a9dc5_s.jpg" alt="Halloween 2014 at Envato in Melbourne"></a><a href="https://live.staticflickr.com/7490/15647103116_1e4b9033f0_b.jpg" title="Halloween 2014 at Envato in Melbourne" data-rel="prettyPhoto[flickrg]" rel="prettyPhoto[flickrg]"><img src="https://live.staticflickr.com/7490/15647103116_1e4b9033f0_s.jpg" alt="Halloween 2014 at Envato in Melbourne"></a><a href="https://live.staticflickr.com/5599/15668909741_eaf3db4054_b.jpg" title="Halloween 2014 at Envato in Melbourne" data-rel="prettyPhoto[flickrg]" rel="prettyPhoto[flickrg]"><img src="https://live.staticflickr.com/5599/15668909741_eaf3db4054_s.jpg" alt="Halloween 2014 at Envato in Melbourne"></a><a href="https://live.staticflickr.com/7544/15670834825_5f55bb7e4e_b.jpg" title="Halloween 2014 at Envato in Melbourne" data-rel="prettyPhoto[flickrg]" rel="prettyPhoto[flickrg]"><img src="https://live.staticflickr.com/7544/15670834825_5f55bb7e4e_s.jpg" alt="Halloween 2014 at Envato in Melbourne"></a><a href="https://live.staticflickr.com/3946/15485435298_7848e85e0a_b.jpg" title="Halloween 2014 at Envato in Melbourne" data-rel="prettyPhoto[flickrg]" rel="prettyPhoto[flickrg]"><img src="https://live.staticflickr.com/3946/15485435298_7848e85e0a_s.jpg" alt="Halloween 2014 at Envato in Melbourne"></a><a href="https://live.staticflickr.com/3937/15647100406_34599445cf_b.jpg" title="Halloween 2014 at Envato in Melbourne" data-rel="prettyPhoto[flickrg]" rel="prettyPhoto[flickrg]"><img src="https://live.staticflickr.com/3937/15647100406_34599445cf_s.jpg" alt="Halloween 2014 at Envato in Melbourne"></a>
                                </div>
                            </section>
                        </div>

                    </div>
                </div>
                <!-- end of #footer -->

                <!-- Footer Bottom -->
                <div id="footer-bottom-wrapper">
                    <div id="footer-bottom" class="container">
                        <div class="row">
                            <div class="span6">
                                <p class="copyright">
                                    Copyright © 2013. All Rights Reserved by KnowledgeBase.
                                </p>
                            </div>
                            <div class="span6">
                                <!-- Social Navigation -->
                                <ul class="social-nav clearfix">
                                    <li class="linkedin"><a target="_blank" href="#"></a></li>
                                    <li class="stumble"><a target="_blank" href="#"></a></li>
                                    <li class="google"><a target="_blank" href="#"></a></li>
                                    <li class="deviantart"><a target="_blank" href="#"></a></li>
                                    <li class="flickr"><a target="_blank" href="#"></a></li>
                                    <li class="skype"><a target="_blank" href="skype:#?call"></a></li>
                                    <li class="rss"><a target="_blank" href="#"></a></li>
                                    <li class="twitter"><a target="_blank" href="#"></a></li>
                                    <li class="facebook"><a target="_blank" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Footer Bottom -->

            </footer>
        </div>

        @include('layouts.partial.modals')
        @include('layouts.partial.js')
    </body>
</html>