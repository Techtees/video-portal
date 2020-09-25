@extends('dashboard.template')

@section('page-title')
    Blank
@endsection

@section('css')
    <!-- player -->

    <link href="{{ asset('js/vendor/magnificPopup/dist/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('js/vendor/player/johndyer-mediaelement-89793bc/build/mediaelementplayer.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xs-12 col-sm-12">
                <div class="sv-video">
                    @if($video->source == 'file')
                        <video poster="{{$video->thumbnail}}" style="width:100%;height:100%;" controls="controls" width="100%" height="100%">
                            <source src="{{$video->video}}" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></source>
                        </video>
                    @else 
                        <div class="video-responsive">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/9LgeDcu-oho" frameborder="0" allowfullscreen></iframe>
                        </div>
                    @endif
                </div>
                <h1><a href="#">{{$video->title}}</a></h1>
                <div class="acide-panel acide-panel-top">
                    <a href="#"><i class="cv cvicon-cv-watch-later" data-toggle="tooltip" data-placement="top" title="Watch Later"></i></a>
                    <a href="#"><i class="cv cvicon-cv-liked" data-toggle="tooltip" data-placement="top" title="Liked"></i></a>
                    <a href="#"><i class="cv cvicon-cv-flag" data-toggle="tooltip" data-placement="top" title="Flag"></i></a>
                </div>
                <div class="author">
                    <div class="author-head">
                        <a href="#"><img src="{{asset('images/channel-user.png')}}" alt="" class="sv-avatar"></a>
                        <div class="sv-name">
                            <div><a href="#">{{$video->user->name}}</a> . {{$video->user->video->count()}} Videos</div>

                        </div>
                        <a href="#" class="author-btn-add"><i class="cv cvicon-cv-plus"></i></a>
                    </div>
                    <div class="author-border"></div>
                    <div class="sv-views">
                        <div class="sv-views-count">
                            {{$video->views}} views
                        </div>
                        <div class="sv-views-progress">
                            <div class="sv-views-progress-bar"></div>
                        </div>
                        <div class="sv-views-stats">
                            <span class="percent">100%</span>
                            <span class="green"><span class="circle"></span> {{$video->views}}</span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="info">
                    <div class="info-content">
                        <h4>About :</h4>
                        <p>{{$video->description}}</p>

                        <h4>Reference :</h4>
                        <p>{{$video->reference}}</p>

                        <div class="row date-lic">
                            <div class="col-xs-6">
                                <h4>Release Date:</h4>
                                <p>{{$video->created_at}}</p>
                            </div>
                            <div class="col-xs-6 ta-r">
                                <h4>License:</h4>
                                <p>Standard</p>
                            </div>
                        </div>
                    </div>

                    <div class="showless hidden-xs">
                        <a href="#">Show Less</a>
                    </div>

                    <div class="content-block head-div head-arrow head-arrow-top visible-xs">
                        <div class="head-arrow-icon">
                            <i class="cv cvicon-cv-next"></i>
                        </div>
                    </div>

                    <div class="adblock2">
                        <div class="img">
                            <span class="hidden-xs">
                                Google AdSense<br>728 x 90
                            </span>
                            <span class="visible-xs">
                                Google AdSense 320 x 50
                            </span>
                        </div>
                    </div>

                    <!-- similar videos -->
                    <div class="caption hidden-xs">
                        <div class="left">
                            <a href="#">Similar Videos</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="single-v-footer">
                        <div class="single-v-footer-switch">
                            <a href="#" class="active" data-toggle=".similar-v">
                                <i class="cv cvicon-cv-play-circle"></i>
                                <span>Similar Videos</span>
                            </a>
                            <a href="#" data-toggle=".comments">
                                <i class="cv cvicon-cv-comment"></i>
                                <span>236 Comments</span>
                            </a>
                        </div>
                        <div class="similar-v single-video video-mobile-02">
                            <div class="row">
                                @if($upnext_videos->count() > 0)
                                    @foreach($upnext_videos as $upnext_video)
                                    <div class="col-lg-3 col-sm-6 col-xs-12">
                                        <div class="h-video row">
                                            <div class="col-sm-12 col-xs-6">
                                                <div class="v-img">
                                                    <a href="{{route('videos.show', ['video' => $upnext_video->encoded_Id])}}"><img src="{{$upnext_video->thumbnail}}" alt="{{$upnext_video->title}}" style="width:170px;height:117px"></a>
                                                    <div class="time">7:18</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-xs-6">
                                                <div class="v-desc">
                                                    <a href="{{route('videos.show', ['video' => $upnext_video->encoded_Id])}}">{{$upnext_video->title}}</a>
                                                </div>
                                                <div class="v-views">
                                                    {{$upnext_video->views}} views
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @else 
                                    <p>Be the first to upload</p>
                                @endif

                               
                            </div>
                        </div>
                        <!-- END similar videos -->

                        <!-- comments -->
                        <div class="comments">
                            <div class="reply-comment">
                                <div class="rc-header"><i class="cv cvicon-cv-comment"></i> <span class="semibold">{{$comments->count()}}</span> Comments</div>
                                <div class="rc-ava"><a href="#"><img src="{{ asset('images/ava5.png') }}" alt=""></a></div>
                                <div class="rc-comment">
                                    <form action="{{route('comments.store')}}" method="POST" >
                                        @csrf
                                        <input type="hidden" name="video_id" value="{{ $video->id }}" required>
                                        <textarea rows="3" name="comment" required>Share what you think?</textarea>
                                        <button type="submit">
                                            <i class="cv cvicon-cv-add-comment"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="comments-list">

                                <div class="cl-header">
                                    <div class="c-nav">
                                        <ul class="list-inline">
                                            <li><a href="#" class="active">Popular <span class="hidden-xs">Comments</span></a></li>
                                            <li><a href="#">Newest <span class="hidden-xs">Comments</span></a></li>
                                        </ul>
                                    </div>
                                </div>

                                @if($comments->count() > 0)
                                    @foreach($comments as $comment)
                                    <!-- comment -->
                                    <div class="cl-comment">
                                        <div class="cl-avatar"><a href="#"><img src="{{asset('images/ava2.png')}}" alt=""></a></div>
                                        <div class="cl-comment-text">
                                            <div class="cl-name-date"><a href="#">{{$comment->user->name}}</a> . {{$comment->created_at}}</div>
                                            <div class="cl-text">{{$comment->comment}}</div>
                                            <div class="cl-meta"><span class="green"><span class="circle"></span> 245</span> <span class="grey"><span class="circle"></span> 19</span> </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- END comment -->
                                    @endforeach
                                @else 
                                    <p>Be the first to comment</p>
                                @endif

                                <div class="row hidden-xs">
                                    <div class="col-lg-12">
                                        <div class="loadmore-comments">
                                            <form action="#" method="post">
                                                <button class="btn btn-default h-btn">Load more Comments</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END comments -->
                    </div>
                </div>
                <div class="content-block head-div head-arrow visible-xs">
                    <div class="head-arrow-icon">
                        <i class="cv cvicon-cv-next"></i>
                    </div>
                    <div class="adblock2 adblock2-v2">
                        <div class="img">
                            <span>Google AdSense 300 x 250</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- right column -->
            <div class="col-lg-4 col-xs-12 col-sm-12 hidden-xs">

                <!-- up next -->
                <div class="caption">
                    <div class="left">
                        <a href="#">Up Next</a>
                    </div>
                    <div class="right">
                        <a href="#">Autoplay <i class="cv cvicon-cv-btn-off"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="list">
                    @if($upnext_videos->count() > 0)
                        @foreach($upnext_videos as $upnext_video)
                        <div class="h-video row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="v-img">
                                    <a href="{{route('videos.show', ['video' => $upnext_video->encoded_Id])}}"><img src="{{$upnext_video->thumbnail}}" alt="{{$upnext_video->title}}" style="width:270px;height:169px "></a>
                                    <div class="time">15:19</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="v-desc">
                                    <a href="{{route('videos.show', ['video' => $upnext_video->encoded_Id])}}">{{$upnext_video->title}}</a>
                                </div>
                                <div class="v-views">
                                    {{$upnext_video->views}} views
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        @endforeach
                    @else 
                        <p>Be the first to upload</p>
                    @endif


                </div>
                <!-- END up next -->

                <div class="adblock">
                    <div class="img">
                        Google AdSense<br>
                        336 x 280
                    </div>
                </div>

                <!-- Recomended Videos -->
                <div class="caption">
                    <div class="left">
                        <a href="#">Recomended Videos</a>
                    </div>
                    <div class="right">
                        <a href="#">Autoplay <i class="cv cvicon-cv-btn-off"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="list">
                    @if($recommended_videos->count() > 0)
                        @foreach($recommended_videos as $recommended_video)
                        <div class="h-video row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="v-img">
                                    <a href="{{route('videos.show', ['video' => $recommended_video->encoded_Id])}}"><img src="{{$recommended_video->thumbnail}}" alt="{{$recommended_video->title}}" style="width:170px;height:117px "></a>
                                    <div class="time">15:19</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="v-desc">
                                    <a href="{{route('videos.show', ['video' => $recommended_video->encoded_Id])}}">{{$recommended_video->title}}</a>
                                </div>
                                <div class="v-views">
                                    {{$recommended_video->views}} views
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        @endforeach
                    @else 
                        <p>Be the first to upload</p>
                    @endif
                   
                </div>
                <!-- END Recomended Videos -->

                <!-- load more -->
                <div class="loadmore">
                    <a href="#">Show more videos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/vendor/player/johndyer-mediaelement-89793bc/build/mediaelement-and-player.min.js') }}"></script>
@endsection