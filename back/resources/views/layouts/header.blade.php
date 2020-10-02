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
                            <li><a href="{{route('backend.dashboard')}}" class="color-active">Home</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-8 col-xs-3">
                        <form action="#" method="post">
                            <div class="topsearch">
                                <i class="cv cvicon-cv-cancel topsearch-close"></i>
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon2">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="cv cvicon-cv-video-file"></i>&nbsp;&nbsp;&nbsp;<span class="caret"></span></button>/
                                        
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
        <div class="mobile-menu-list">
            <ul>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-play-circle"></i>
                        <p>Channels</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>