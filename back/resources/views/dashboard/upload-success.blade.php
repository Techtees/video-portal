@extends('dashboard.template')

@section('page-title')
    Upload Success
@endsection

@section('content')
<div class="content-wrapper upload-page edit-page">
    <div class="container-fluid u-details-wrap">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="u-details">
                            <div class="row">
                                <div class="col-lg-12 ud-caption">Upload Details</div>
                                <div class="col-lg-2"><div class="imgplace"></div></div>
                                <div class="col-lg-10">
                                    <div class="u-title">Rocket League Gameplay <span class="hidden-xs">03.08.2016 - 15.13.31.01</span></div>
                                    <div class="u-size">102.6 MB . 2:13 MIN Remaining</div>
                                    <div class="u-progress">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                                                <span class="sr-only">35% Complete</span>
                                            </div>
                                        </div>
                                        <div class="u-close">
                                            <a href="#"><i class="cvicon-cv-cancel"></i></a>
                                        </div>
                                    </div>
                                    <div class="u-desc">Your Video is still uploading, please keep this page open until it's done.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="u-form">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="e1">Video Title</label>
                                <input type="text" class="form-control" id="e1" placeholder="Rocket League Pro Championship Gameplay (36 characters remaining)">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="e2">About</label>
                                <textarea class="form-control" name="e2" id="e2" rows="3">Description</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="e2">Reference</label>
                                <textarea class="form-control" name="e2" id="e2" rows="3">Reference</textarea>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="u-area mt-small">
                    <form action="#" method="post">
                        <button class="btn btn-primary u-btn">Save</button>
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