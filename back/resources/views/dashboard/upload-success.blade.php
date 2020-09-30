@extends('dashboard.template')

@section('page-title')
    Upload Success
@endsection

@section('content')
<div class="content-wrapper upload-page edit-page">
    <div class="container-fluid u-details-wrap">
        
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if(Session::get('data'))
                    <div class="alert alert-success">
                        {{Session::get('data')}}
                    </div>
                @endif
                <form action="{{route('videos.update', ['video' => $video->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="u-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="e1">Video Title</label>
                                    <input type="text" class="form-control" id="e1" placeholder="Rocket League Pro Championship Gameplay (36 characters remaining)" name="title" value="{{$video->title}}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="e2">About</label>
                                    <textarea class="form-control" id="e2" rows="3" name="description" placeholder="Description">{{$video->description}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="e2">Thumbnail</label> <br>
                                    <small>upload a picture that shows what's in your video. A good thumbnail stands out and draws viewers' attention</small>
                                    <input type="file" class="form-control-file" id="file-input" name="thumbnail">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="e2">Reference</label>
                                    <textarea class="form-control" id="e2" rows="3" name="reference" placeholder="Reference">{{$video->reference}}</textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="u-area mt-small">
                            <button type="submit" class="btn btn-primary u-btn">Save</button>
                    </div>
                </form>

                <div class="u-terms">
                    <p>By submitting your videos to circle, you acknowledge that you agree to circle's <a href="#">Terms of Service</a> and <a href="#">Community Guidelines</a>.</p>
                    <p class="hidden-xs">Please be sure not to violate others' copyright or privacy rights. Learn more</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection