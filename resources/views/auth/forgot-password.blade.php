<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Forgot Password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('contents/admin') }}/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('contents/admin') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('contents/admin') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('contents/admin') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
    
                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="index.html" class="auth-logo">
                                    <img src="{{ asset('contents/admin') }}/assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="{{ asset('contents/admin') }}/assets/images/logo-light.png" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>
    
                        <h4 class="text-muted text-center font-size-18"><b>Reset Password</b></h4>
    
                        <div class="p-3">
                            <form method="POST" action="{{ route('password.email') }}" class="form-horizontal mt-3">
                                @csrf
                                
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                Forgot your password? <strong>No problem</strong>. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="col-xs-12">
                                        <input id="email" type="email" name="email" required="" class="form-control" placeholder="Email">
                                    </div>
                                </div>
    
                                <div class="form-group pb-2 text-center row mt-3">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Send Email</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->
        

        <!-- JAVASCRIPT -->
        <script src="{{ asset('contents/admin') }}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('contents/admin') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('contents/admin') }}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('contents/admin') }}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('contents/admin') }}/assets/libs/node-waves/waves.min.js"></script>

        <script src="{{ asset('contents/admin') }}/assets/js/app.js"></script>

    </body>
</html>

