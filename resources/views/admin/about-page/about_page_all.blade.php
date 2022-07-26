@extends('layouts.admin')
@section('title')
    About Page
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">About Page</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('update.about') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $aboutpage->about_id }}">

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input name="title" class="form-control" type="text" value="{{ $aboutpage->title }}"  id="example-text-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Title </label>
                            <div class="col-sm-10">
                                <input name="short_title" class="form-control" type="text" value="{{ $aboutpage->short_title }}"  id="example-text-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Description </label>
                            <div class="col-sm-10">
                                <textarea required="" name="short_description"  class="form-control" rows="5">
                                    {{ $aboutpage->short_description }}
                                </textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Long Description </label>
                            <div class="col-sm-10">
                                <textarea id="elm1" name="long_description">
                                    {{ $aboutpage->long_description }}
                                </textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">About Image </label>
                            <div class="col-sm-10">
                                <input name="about_image" class="form-control" type="file" id="image">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($aboutpage->about_image))? url( $aboutpage->about_image):url('upload/no_image.jpg') }}" alt="Card image cap">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update About Page">
                    </form>
                    
                
                
                </div>
            </div>
        </div>
    </div>
@endsection