@extends('layouts.base')

@push('styles')
    <link href="{{ asset('css/home/home.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="search-area-wrapper">
        <div class="container">
            <h3>Have a Question?</h3>
            <p>If you have any question you can ask below or enter what you are looking for!</p>

            <form id="search-form" class="search-form clearfix" method="get" action="#" autocomplete="off" novalidate="novalidate">
                <input class="search-term required" type="text" id="s" name="s" placeholder="Type your search terms here" title="* Please enter a search term!" autocomplete="off">
                <input class="search-btn" type="submit" value="Search">
                <div id="search-error-container"></div>
            </form>
        </div>
    </div>
    <div class="page-area-wrapper">
        <div class="container">
            <div class="section-wrapper">
                <section class="articles-list">
                    <h3>Featured Articles</h3>
                    <ul class="articles">
                        @foreach([1,2,3,4,5,6] as $item)
                            <li>
                                <h4 class="ellipsis">
                                    <i class='fas fa-video mr-2'></i><a href="#">Integrating WordPress with Your Website</a>
                                </h4>
                                <p>
                                    <span class="article-meta">25 Feb, 2013 in</span>
                                    <a href="#">Server &amp; Database</a>
                                    <span class="like-count"><i class="fas fa-thumbs-up mr-1"></i>77</span>
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </section>
                <section class="articles-list">
                    <h3>Featured Articles</h3>
                    <ul class="articles">
                        @foreach([1,2,3,4,5,6] as $item)
                            <li>
                                <h4 class="ellipsis">
                                    <i class='fas fa-video mr-2'></i><a href="#">Integrating WordPress with Your Website</a>
                                </h4>
                                <p>
                                    <span class="article-meta">25 Feb, 2013 in</span>
                                    <a href="#">Server &amp; Database</a>
                                    <span class="like-count"><i class="fas fa-thumbs-up mr-1"></i>77</span>
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </section>
            </div>
            <aside>
                <section class="widget">
                    <div class="support-widget">
                        <h3 class="title">Support</h3>
                        <p class="intro">Need more support? If you did not found an answer, contact us for further help.</p>
                    </div>
                </section>
                <section class="widget">
                    <div class="quick-links-widget">
                        <h3 class="title">Quick Links</h3>
                        <ul id="menu-quick-links" class="menu clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="articles-list.html">Articles List</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </section>
                <section class="widget">
                    <h3 class="title">Tags</h3>
                    <div class="tagcloud">
                        <a href="#" class="btn btn-mini">basic</a>
                        <a href="#" class="btn btn-mini">beginner</a>
                        <a href="#" class="btn btn-mini">blogging</a>
                        <a href="#" class="btn btn-mini">colour</a>
                        <a href="#" class="btn btn-mini">css</a>
                        <a href="#" class="btn btn-mini">date</a>
                        <a href="#" class="btn btn-mini">design</a>
                        <a href="#" class="btn btn-mini">files</a>
                        <a href="#" class="btn btn-mini">format</a>
                        <a href="#" class="btn btn-mini">header</a>
                        <a href="#" class="btn btn-mini">images</a>
                        <a href="#" class="btn btn-mini">plugins</a>
                        <a href="#" class="btn btn-mini">setting</a>
                        <a href="#" class="btn btn-mini">templates</a>
                        <a href="#" class="btn btn-mini">theme</a>
                        <a href="#" class="btn btn-mini">time</a>
                        <a href="#" class="btn btn-mini">videos</a>
                        <a href="#" class="btn btn-mini">website</a>
                        <a href="#" class="btn btn-mini">wordpress</a>
                    </div>
                </section>
            </aside>
        </div>
    </div>
@endsection
