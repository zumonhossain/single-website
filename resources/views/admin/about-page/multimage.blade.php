@extends('layouts.admin')
@section('title')
    Add Multi Image
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Add Multi Image</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('store.multi.image') }}" enctype="multipart/form-data">
                        @csrf
                        
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">About Multi Image </label>
                        <div class="col-sm-10">
                            <input name="multi_image[]" class="form-control" type="file" id="image" multiple="" >
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                        <div class="col-sm-10">
                            <img id="showImage" class="rounded avatar-lg" src="{{  url('upload/no_image.jpg') }}" alt="Card image cap">
                        </div>
                    </div>
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Multi Image">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection