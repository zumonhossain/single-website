
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('contents/website') }}/assets/img/favicon.png">

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/animate.min.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/slick.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/default.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/style.css">
        <link rel="stylesheet" href="{{ asset('contents/website') }}/assets/css/responsive.css">
    </head>
    <body>

        <!-- preloader-start -->
        <div id="preloader">
            <div class="rasalina-spin-box"></div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
            @include('website.includes.header')
        <!-- header-area-end -->

        <!-- main-area -->
        <main>

            @yield('content')

        </main>
        <!-- main-area-end -->



        <!-- Footer-area -->
            @include('website.includes.footer')
        <!-- Footer-area-end -->




		<!-- JS here -->
        <script src="{{ asset('contents/website') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/bootstrap.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/isotope.pkgd.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/element-in-view.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/slick.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/ajax-form.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/wow.min.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/plugins.js"></script>
        <script src="{{ asset('contents/website') }}/assets/js/main.js"></script>
    </body>
</html>