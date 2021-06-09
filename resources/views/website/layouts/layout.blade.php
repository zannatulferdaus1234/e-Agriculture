<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>e-Agriculture</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('/')}}assets/website/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('/')}}assets/website/css/main.css">
    <link rel="stylesheet" href="{{ asset('/')}}assets/website/css/blue.css">
    <link rel="stylesheet" href="{{ asset('/')}}assets/website/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('/')}}assets/website/css/owl.transitions.css">
    <link rel="stylesheet" href="{{ asset('/')}}assets/website/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('/')}}assets/website/css/rateit.css">
    <link rel="stylesheet" href="{{ asset('/')}}assets/website/css/bootstrap-select.min.css">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ asset('/')}}assets/website/css/font-awesome.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body>

    <!-- header section -->
    <header class="header-style-1">

        @includeIf('website.components.header')

        @includeIF('website.components.search-box')

    </header>

    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row'>

                <!-- sidebar -->

                <div class='col-md-3 sidebar'>
                    @includeIF('website.components.sidebar')
                </div>

                <!-- Main body -->

                <div class='col-md-9'>
                    @yield('content')
                </div>

            </div>
        </div>
    </div>

    <!-- footer section -->
    @includeIf('website.components.footer')



    <script src="{{ asset('/')}}assets/website/js/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('/')}}assets/website/js/bootstrap.min.js"></script>
    <script src="{{ asset('/')}}assets/website/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="{{ asset('/')}}assets/website/js/owl.carousel.min.js"></script>
    <script src="{{ asset('/')}}assets/website/js/echo.min.js"></script>
    <script src="{{ asset('/')}}assets/website/js/jquery.easing-1.3.min.js"></script>
    <script src="{{ asset('/')}}assets/website/js/bootstrap-slider.min.js"></script>
    <script src="{{ asset('/')}}assets/website/js/jquery.rateit.min.js"></script>
    <script src="{{ asset('/')}}assets/website/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('/')}}assets/website/js/wow.min.js"></script>
    <script src="{{ asset('/')}}assets/website/js/scripts.js"></script>
</body>

</html>
