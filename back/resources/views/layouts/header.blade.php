<!-- logo, menu, search, avatar -->
<div class="container-fluid">
    <div class="row">
        <div class="btn-color-toggle">
            <img src="{{asset('images/icon_bulb_light.png') }}" alt="">
        </div>
        <div class="navbar-container single">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 visible-xs">
                        <a href="#" class="btn-menu-toggle"><i class="cv cvicon-cv-menu"></i></a>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-xs-6">
                        <a class="navbar-brand" href="index-2.html">
                            <img src="{{asset('images/logo.svg') }}" alt="Project name" class="logo" />
                            <span>Circle</span>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-10 hidden-xs">
                        <ul class="list-inline menu">
                            <li class="color-active">
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="index-2.html">Home Page</a></li>
                                    <li><a href="single-video.html">Single Video Page</a></li>
                                    <li><a href="single-video-youtube.html">Single Video Youtube Embedded Page</a></li>
                                    <li><a href="single-video-vimeo.html">Single Video Vimeo Embedded Page</a></li>
                                    <li><a href="upload.html">Upload Video Page</a></li>
                                    <li><a href="upload-edit.html">Upload Video Edit Page</a></li>
                                    <li><a href="search.html">Searched Videos Page</a></li>
                                    <li><a href="channel.html">Single Channel Page</a></li>
                                    <li><a href="channels.html">Channels Page</a></li>
                                    <li><a href="single-video-tabs.html">Single Videos Page With Tabs</a></li>
                                    <li><a href="single-video-playlist.html">Single Videos Page With Playlist</a></li>
                                    <li><a href="history.html">History Page</a></li>
                                    <li><a href="categories.html">Browse Categories Page</a></li>
                                    <li><a href="categories_side_menu.html">Browse Categories Side Menu Page</a></li>
                                    <li><a href="subscription.html">Subscription Page</a></li>
                                    <li><a href="login.html">Login Page</a></li>
                                    <li><a href="signup.html">Signup Page</a></li>
                                </ul>
                            </li>
                            <li><a href="categories.html">Categories</a></li>
                            <li><a href="channel.html">Channels</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-8 col-xs-3">
                        <form action="http://azyrusthemes.com/circlevideo/search.html" method="post">
                            <div class="topsearch">
                                <i class="cv cvicon-cv-cancel topsearch-close"></i>
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon2">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="cv cvicon-cv-video-file"></i>&nbsp;&nbsp;&nbsp;<span class="caret"></span></button>/
                                        <ul class="dropdown-menu">
                                            <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-sm-12 hidden-xs">
                        <div class="loginsignup pull-right">
                            <a href="{{route('login')}}">Login</a> . <a href="{{route('register')}}">Signup</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /logo -->

<div class="mobile-menu">
    <div class="mobile-menu-head">
        <a href="#" class="mobile-menu-close"></a>
        <a class="navbar-brand" href="index-2.html">
            <img src="{{asset('images/logo.svg') }}" alt="Project name" class="logo" />
            <span>Circle</span>
        </a>
        <div class="mobile-menu-btn-color">
            <img src="{{asset('images/icon_bulb_light.png') }}" alt="">
        </div>
    </div>
    <div class="mobile-menu-content">
        <div class="mobile-menu-user">
            <div class="mobile-menu-user-img">
                <img src="{{asset('images/ava11.png') }}" alt="">
            </div>
            <p>Bailey Fry </p>
            <span class="caret"></span>
        </div>
        <a href="#" class="btn mobile-menu-upload">
            <i class="cv cvicon-cv-upload-video"></i>
            <span>Upload Video</span>
        </a>
        <div class="mobile-menu-list">
            <ul>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-play-circle"></i>
                        <p>Popular Videos</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-playlist"></i>
                        <p>Browse Categories</p>
                        <span class="caret"></span>
                    </a>
                    <ul class="mobile-menu-categories">
                        <li class="color-active">
                            <a href="#">Pages <span class="caret"></span></a>
                            <ul>
                                <li><a href="index-2.html">Home Page</a></li>
                                <li><a href="single-video.html">Single Video Page</a></li>
                                <li><a href="single-video-youtube.html">Single Video Youtube Embedded Page</a></li>
                                <li><a href="single-video-vimeo.html">Single Video Vimeo Embedded Page</a></li>
                                <li><a href="upload.html">Upload Video Page</a></li>
                                <li><a href="upload-edit.html">Upload Video Edit Page</a></li>
                                <li><a href="search.html">Searched Videos Page</a></li>
                                <li><a href="channel.html">Single Channel Page</a></li>
                                <li><a href="channels.html">Channels Page</a></li>
                                <li><a href="single-video-tabs.html">Single Videos Page With Tabs</a></li>
                                <li><a href="single-video-playlist.html">Single Videos Page With Playlist</a></li>
                                <li><a href="history.html">History Page</a></li>
                                <li><a href="categories.html">Browse Categories Page</a></li>
                                <li><a href="categories_side_menu.html">Browse Categories Side Menu Page</a></li>
                                <li><a href="subscription.html">Subscription Page</a></li>
                                <li><a href="login.html">Login Page</a></li>
                                <li><a href="signup.html">Signup Page</a></li>
                            </ul>
                        </li>
                        <li><a href="categories.html">Categories</a></li>
                        <li><a href="channel.html">Channels</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-liked"></i>
                        <p>Liked Videos</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-history"></i>
                        <p>History</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-purchased"></i>
                        <p>Purchased Videos</p>
                    </a>
                </li>
            </ul>
        </div>
        <a href="#" class="btn mobile-menu-logout">Log out</a>
    </div>
</div>