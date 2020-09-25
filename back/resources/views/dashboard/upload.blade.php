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
                    <form method="POST" action="{{ route('videos.store') }}" enctype="multipart/form-data">
                        @csrf
                    <i class="cv cvicon-cv-upload-video " onclick="openFileOption();return;"></i>
                        <input type="file" id="file1" style="display:none" name="video"> 
                    <p class="u-text1">Select Video files to upload</p>
                    <p class="u-text2">or enter youtube link</p>
                    <div class="form-group">
                        <input type="text"  id="" placeholder="https://www.youtube.com/watch?v=W8NUoz6Yd4Y">
                    </div>
                        <button type="submit" class="btn btn-primary u-btn">Upload Video</button>
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

@section('scripts')
<script>
    function openFileOption()
    {
        document.getElementById("file1").click();
    }
 </script>
@endsection