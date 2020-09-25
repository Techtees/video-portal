@extends('dashboard.template')

@section('page-title')
    Home Page
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

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
                            @if($videos->count() > 0)
                                @foreach($videos as $video)
                                <div class="col-lg-3 col-sm-6 videoitem">
                                    <div class="b-video">
                                        <div class="v-img">
                                            <a href="{{route('videos.show', ['video' => $video->encoded_Id])}}"><img src="{{$video->thumbnail}}" alt="{{$video->title}}" style="width:270px;height:169px "></a>
                                            <div class="time">3:50</div>
                                        </div>
                                        <div class="v-desc">
                                            <a href="{{route('videos.show', ['video' => $video->encoded_Id])}}">{{$video->title}}</a>
                                        </div>
                                        <div class="v-views">
                                            {{$video->views}} views. 
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @else 
                                <p>Be the first to upload</p>
                            @endif

                        </div>
                    </div>
                </div>
                <!-- /Featured Videos -->


            </div>
        </div>
    </div>
</div>
@endsection