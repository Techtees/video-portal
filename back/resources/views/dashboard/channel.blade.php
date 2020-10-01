@extends('dashboard.template')

@section('page-title')
    Channel
@endsection

@section('content')
<!-- channel -->
<div class="container-fluid">
    <div class="row">
        <div class="img">
            <div class="img-image">
                <img src="{{asset('images/channel-banner.png')}}" alt="" class="c-banner">
            </div>
            <div class="c-avatar">
                <a href="#"><img src="{{ Auth::user()->photo }}" alt="" style="width: 176px; height:157px;"></a>
            </div>
            <a href="#" class="add"><i class="cv cvicon-cv-plus"></i></a>
            {{-- <div class="c-social hidden-xs">
                Social
                <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                <a href="#" class="tw"><i class="fa fa-twitter"></i></a>
                <a href="#" class="gp"><i class="fa fa-google-plus"></i></a>
            </div> --}}
        </div>
    </div>
</div>
<!-- ///channel -->

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="channel-details">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-2 col-xs-12">
                            <div class="c-details">
                                <div class="c-name">
                                    {{$user->name}}
                                    {{-- <div class="c-checkbox">
                                        <img src="images/verified-profile-icon.png" alt="">
                                    </div> --}}
                                </div>
                                <div class="c-nav">
                                    <ul class="list-inline">
                                        <li><a href="#">Videos</a></li>
                                    </ul>
                                    <div class="btn-group dropup pull-right">
                                        <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Discussion <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Featured Videos -->
                <div class="content-block">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-8 col-xs-6">
                                <div class="btn-group bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Uploads <span class="caret"></span>
                                    </button>
                                    {{-- <ul class="dropdown-menu">
                                        <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                    </ul> --}}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-4 col-xs-6">
                                <div class="h-grid pull-right hidden-xs">
                                    <a href="#"><i class="cv cvicon-cv-grid-view"></i></a>
                                    <a href="#"><i class="cv cvicon-cv-list-view"></i></a>
                                </div>
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Date Added ( Newest ) <span class="caret"></span>
                                    </button>
                                    {{-- <ul class="dropdown-menu">
                                        <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                    </ul> --}}
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">

                            @if($videos->count() > 0)
                                @foreach($videos as $video)
                                <div class=" col-lg-3 col-sm-6 videoitem">
                                    <div class="b-video">
                                        <div class="v-img" id="{{$video->encoded_Id}}">
                                            <a href="{{route('videos.show', ['video' => $video->encoded_Id])}}"><img src="{{$video->thumbnail}}" alt="{{$video->title}}" style="width:270px;height:169px"></a>
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

@section('scripts')
<script>
    $( document ).ready(function() {
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Home page
    // Video block hover
    var $plus = $( '<div class="plus"><i class="cvicon-cv-plus" aria-hidden="true"></i></div>' );
    // var $plusDetails = $(  );

    $(".videolist .v-img").hover( function() {
            $(this).append($plus);
            var plus = $(this);
            var plus_id = plus.attr("id");
            $(".plus").hover( function() {
                var video_url = '{{ route("videos.edit", ["video"=> ":video_id"] ) }}';
                var video_url_del = '{{ route("videos.destroy", ["video"=> ":video_id"] ) }}';
                    video_url = video_url.replace(':video_id', plus_id);
                    video_url_del = video_url_del.replace(':video_id', plus_id);

                    $(this).parent().append(
                        `<div class="plus-details">\
                            <ul >\
                                <li><a href="${video_url}"><i class="cvicon-cv-watch-later" aria-hidden="true"></i> Edit</a></li>\
                                <li><a href="${video_url_del}"><i class="cvicon-cv-playlist" aria-hidden="true"></i> Delete</a></li>\
                            </ul>\
                        </div>`

                    );
                } , function(){

                }
            );

        } , function(){
            $(this).find(".plus").remove();
            $(this).find(".plus-details").remove();
        }
    );

   
    });
</script>
@endsection