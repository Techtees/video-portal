@extends('dashboard.template')

@section('page-title')
    Home Page
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Updates from Subscriptions -->
                <div class="content-block">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-10">
                                <ul class="list-inline">
                                    <li><a href="#">Updates from Subscriptions</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-2">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content avatars">
                        <div class="row">
                            <div class="col-lg-1 col-sm-2 col-xs-3"><a href="#"><img src="images/ava2.png" alt=""><div class="note">1</div></a></div>
                            <div class="col-lg-1 col-sm-2 col-xs-3"><a href="#"><img src="images/ava3.png" alt=""><div class="note">03</div></a></div>
                            <div class="col-lg-1 col-sm-2 col-xs-3"><a href="#"><img src="images/ava4.png" alt=""><div class="note">10</div></a></div>
                            <div class="col-lg-1 col-sm-2 col-xs-3"><a href="#"><img src="images/ava5.png" alt=""><div class="note">56</div></a></div>
                            <div class="col-lg-1 col-sm-2 col-xs-3"><a href="#"><img src="images/ava6.png" alt=""><div class="note">6</div></a></div>
                            <div class="col-lg-1 col-sm-2 col-xs-3"><a href="#"><img src="images/ava7.png" alt=""><div class="note">25</div></a></div>
                            <div class="col-lg-1 col-sm-2 col-xs-3"><a href="#"><img src="images/ava8.png" alt=""><div class="note">23</div></a></div>
                            <div class="col-lg-1 col-sm-2 col-xs-3"><a href="#"><img src="images/ava9.png" alt=""><div class="note">16</div></a></div>
                            <div class="col-lg-1 col-sm-2 col-xs-3"><a href="#"><img src="images/ava10.png" alt=""><div class="note">3</div></a></div>
                            <div class="col-lg-1 col-sm-2 col-xs-3"><a href="#"><img src="images/ava11.png" alt=""><div class="note">6</div></a></div>
                            <div class="col-lg-1 col-sm-2 col-xs-3"><a href="#"><img src="images/ava12.png" alt=""><div class="note">98</div></a></div>
                            <div class="col-lg-1 col-sm-2 col-xs-3"><a href="#"><img src="images/ava1.png" alt=""><div class="note">125</div></a></div>
                        </div>
                    </div>
                </div>
                <!-- /Updates from Subscriptions -->

                <!-- Featured Videos -->
                <div class="content-block head-div">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-active">
                                            <span class="visible-xs">Featured</span>
                                            <span class="hidden-xs">Featured Videos</span>
                                        </a>
                                    </li>
                                    <li><a href="#">New Videos</a></li>
                                    <li class="hidden-xs"><a href="#">Recommended For You</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sort by <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="single-video-tabs.html"><img src="images/video1-1.png" alt=""></a>
                                        <div class="time">3:50</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.html">Man's Sky: 21 Minutes of New Gameplay - IGN First</a>
                                    </div>
                                    <div class="v-views">
                                        27,548 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="single-video-tabs.html"><img src="images/video1-2.png" alt=""></a>
                                        <div class="time">15:19</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.html">GTA 5: Michael, Franklin, and Trevor in the Flesh</a>
                                    </div>
                                    <div class="v-views">
                                        8,241,542 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="single-video-tabs.html"><img src="images/video1-3.png" alt=""></a>
                                        <div class="time">4:23</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.html">Battlefield 3: Official Fault Line Gameplay Trailer</a>
                                    </div>
                                    <div class="v-views">
                                        2,729,347 views . <span class="v-percent"><span class="v-circle"></span> 95%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="single-video-tabs.html"><img src="images/video1-4.png" alt=""></a>
                                        <div class="time">7:18</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.html">Batman Arkham City: Hugo Strange Trailer</a>
                                    </div>
                                    <div class="v-views">
                                        7,239,852 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.html"><img src="images/video1-5.png" alt=""></a>
                                        <div class="time">23:57</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.html">BATTALION 1944: TAKING ON BATTLEFIELD 5</a>
                                    </div>
                                    <div class="v-views">
                                        19,130 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.html">
                                            <img src="images/video1-6.png" alt="">
                                            <div class="watched-mask"></div>
                                            <div class="watched">WATCHED</div>
                                            <div class="time">7:27</div>
                                        </a>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.html">Amazon Blocking VIDEO GAMES for Non-Prime...</a>
                                    </div>
                                    <div class="v-views">
                                        185,525 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.html"><img src="images/video1-7.png" alt=""></a>
                                        <div class="time">12:58</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.html">Amazing Facts About Nebulas Inside Deep Universe</a>
                                    </div>
                                    <div class="v-views">
                                        203,741 views. <span class="v-percent"><span class="v-circle"></span> 95%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 videoitem">
                                <div class="b-video last-row">
                                    <div class="v-img">
                                        <a href="single-video-tabs.html"><img src="images/video1-8.png" alt=""></a>
                                        <div class="time">9:47</div>
                                    </div>
                                    <div class="v-desc">
                                        <a href="single-video-tabs.html">Cornfield Chase - Outlast II Official Gameplay</a>
                                    </div>
                                    <div class="v-views">
                                        202,513 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Featured Videos -->

                <!-- Popular Channels -->
                <div class="content-block head-div head-arrow">
                    <div class="head-arrow-icon">
                        <i class="cv cvicon-cv-next"></i>
                    </div>
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-xs-8">
                                <ul class="list-inline">
                                    <li><a href="#" class="color-active">Popular Channels</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-xs-4">
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       More <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content chanels-row">
                        <div class="row">
                            <div class="col-lg-2 col-sm-4 col-xs-4">
                                <div class="b-chanel">
                                    <a href="#">
                                        <img src="images/chanel-1.png" alt="">
                                        <div class="hover">
                                            <span>Ray Simpson</span>
                                            <span><i class="cv cvicon-cv-liked"></i> 5K</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-xs-4">
                                <div class="b-chanel">
                                    <a href="#">
                                        <img src="images/chanel-2.png" alt="">
                                        <div class="hover">
                                            <span>Ray</span>
                                            <span><i class="cv cvicon-cv-liked"></i> 215K</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-xs-4">
                                <div class="b-chanel">
                                    <a href="#">
                                        <img src="images/chanel-3.png" alt="">
                                        <div class="hover">
                                            <span>Simpson</span>
                                            <span><i class="cv cvicon-cv-liked"></i> 21</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-xs-4">
                                <div class="b-chanel">
                                    <a href="#">
                                        <img src="images/chanel-4.png" alt="">
                                        <div class="hover">
                                            <span>Ray Simpson</span>
                                            <span><i class="cv cvicon-cv-liked"></i> 134</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-xs-4">
                                <div class="b-chanel">
                                    <a href="#">
                                        <img src="images/chanel-5.png" alt="">
                                        <div class="hover">
                                            <span>Simpson</span>
                                            <span><i class="cv cvicon-cv-liked"></i> 1.6M</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-4 col-xs-4">
                                <div class="b-chanel">
                                    <a href="#">
                                        <img src="images/chanel-6.png" alt="">
                                        <div class="hover">
                                            <apan>Ray</apan>
                                            <span><i class="cv cvicon-cv-liked"></i> 265K</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Popular Channels -->

                <!-- pagination -->
                <div class="v-pagination">
                    <ul class="list-inline">
                        <li class="v-pagination-prev"><a href="#"><i class="cv cvicon-cv-previous"></i></a></li>
                        <li class="v-pagination-first"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">10</a></li>
                        <li class="v-pagination-skin visible-xs"><a href="#">Skip 5 Pages</a></li>
                        <li class="v-pagination-next"><a href="#"><i class="cv cvicon-cv-next"></i></a></li>
                    </ul>
                </div>
                <!-- /pagination -->

            </div>
        </div>
    </div>
</div>
@endsection