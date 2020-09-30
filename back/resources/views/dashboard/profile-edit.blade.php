@extends('dashboard.template')

@section('page-title')
    Edit Channel
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
                <a href="#"><img src="{{Auth::user()->photo}}" alt="" style="width: 176px; height:157px;"></a>
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
                            <div class="col-lg-4 col-xs-6">
                                <div class="h-grid pull-right hidden-xs">
                                    <a href="#"><i class="cv cvicon-cv-grid-view"></i></a>
                                    <a href="#"><i class="cv cvicon-cv-list-view"></i></a>
                                </div>
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Date Added ( Newest ) <span class="caret"></span>
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
                            <div class="col-lg-12">
                                @if(Session::get('data'))
                                    <div class="alert alert-success">
                                        {{Session::get('data')}}
                                    </div>
                                @endif
                                <form action="{{route('channel.update', ['user' => $user->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="u-form">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="e1">Full name</label>
                                                    <input type="text" class="form-control" id="e1" placeholder="Full name" name="name" value="{{$user->name}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="e2">Profile Photo</label> <br>
                                                    <input type="file" class="form-control-file" id="file-input" name="photo">
                                                </div>
                                            </div>
                                        </div>
                
                                    </div>
                                    <div class="u-area mt-small">
                                            <button type="submit" class="btn btn-primary u-btn">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Featured Videos -->

            </div>
        </div>
    </div>
</div>
@endsection