@extends('layouts.admin')
@section('title')
    Edit Portfolio
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Update Portfolio Data</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('update.portfolio') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{  $portfolio->portfolio_id }}">

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Name</label>
                            <div class="col-sm-10">
                                <input name="portfolio_name" class="form-control" type="text" value="{{ $portfolio->portfolio_name }}" id="example-text-input">
                                @error('portfolio_name')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Title </label>
                            <div class="col-sm-10">
                                <input name="portfolio_title" class="form-control" type="text" value="{{ $portfolio->portfolio_title }}" id="example-text-input">
                                @error('portfolio_title')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Description </label>
                            <div class="col-sm-10">
                                <textarea id="elm1" name="portfolio_description">
                                    {{ $portfolio->portfolio_description }}
                                </textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Image </label>
                            <div class="col-sm-10">
                                <input name="portfolio_image" class="form-control" type="file" id="image">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded avatar-lg" src="{{ asset($portfolio->portfolio_image) }}" alt="Card image cap">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Protfolio Data">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection