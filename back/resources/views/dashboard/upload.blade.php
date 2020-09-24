@extends('dashboard.template')

@section('page-title')
    Upload
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 upload-page">

                <div class="u-area">
                    <i class="cv cvicon-cv-upload-video"></i>

                    <p class="u-text1">Select Video files to upload</p>
                    <p class="u-text2">or drag and drop video files</p>

                    <form action="#" method="post">
                        <button class="btn btn-primary u-btn">Upload Video</button>
                    </form>
                </div>

                <div class="u-terms">
                    <p>By submitting your videos to circle, you acknowledge that you agree to circle's <a href="#">Terms of Service</a> and <a href="#">Community Guidelines</a>.</p>
                    <p class="hidden-xs">Please be sure not to violate others' copyright or privacy rights. Learn more</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection