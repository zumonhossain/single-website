@extends('layouts.admin')
@section('title')
    Add Portfolio
@endsection
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Add Portfolio</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" id="myPortfolioForm" action="{{ route('store.portfolio') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Name</label>
                            <div class="col-sm-10 form-group">
                                <input name="portfolio_name" class="form-control" type="text" id="example-text-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Title </label>
                            <div class="col-sm-10 form-group">
                                <input name="portfolio_title" class="form-control" type="text" id="example-text-input">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Description </label>
                            <div class="col-sm-10">
                                <textarea id="elm1" name="portfolio_description">
                            
                                </textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Protfolio Image </label>
                            <div class="col-sm-10 form-group">
                                <input name="portfolio_image" class="form-control" type="file" id="image">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}" alt="Card image cap">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Protfolio Data">
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>


    <script type="text/javascript">
        $(document).ready(function (){
            $('#myPortfolioForm').validate({
                rules: {
                    portfolio_name: {
                        required : true,
                    }, 
                    portfolio_title: {
                        required : true,
                    }, 
                    portfolio_image: {
                        required : true,
                    }, 
                },
                messages :{
                    portfolio_name: {
                        required : 'Please Enter Portfolio Name!',
                    },
                    portfolio_title: {
                        required : 'Please Enter Portfolio Title!',
                    },
                    portfolio_image: {
                        required : 'Please Enter Portfolio Image!',
                    },
                },
                errorElement : 'span', 
                errorPlacement: function (error,element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection