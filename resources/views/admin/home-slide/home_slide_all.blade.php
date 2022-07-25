@extends('layouts.admin')
@section('title')
    Home Slider
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Home Slider</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('update.slider') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $data->home_slider_id }}">

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input name="title" class="form-control" type="text" value="{{ $data->title }}"  id="example-text-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Title </label>
                            <div class="col-sm-10">
                                <input name="sub_title" class="form-control" type="text" value="{{ $data->sub_title }}"  id="example-text-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Video URL </label>
                            <div class="col-sm-10">
                                <input name="video_url" class="form-control" type="text" value="{{ $data->video_url }}"  id="example-text-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Slider Image </label>
                            <div class="col-sm-10">
                                <input name="slide_image" class="form-control" type="file"  id="image">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($data->slide_image))? url( $data->slide_image):url('upload/no_image.jpg') }}" alt="Card image cap">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Slide">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection