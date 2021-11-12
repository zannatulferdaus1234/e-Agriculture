<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('/') }}assets/webapp/images/favicon.png">
    <title>e-Agriculture</title>
    <!-- CSS FILES START -->
    <link href="{{ asset('/') }}assets/webapp/css/custom.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/webapp/css/color.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/webapp/css/responsive.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/webapp/css/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/webapp/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/webapp/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/webapp/css/all.min.css" rel="stylesheet">
    <!-- CSS FILES End -->

    @livewireStyles

</head>

<body>
    <div class="wrapper home2">

        @includeIf('webapp.layout.header')

        @yield('content')

        @includeIf('webapp.layout.search')

        @includeIf('webapp.layout.footer')

    </div>
    <!--   JS Files Start  -->
    <script src="{{ asset('/') }}assets/webapp/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('/') }}assets/webapp/js/jquery-migrate-1.4.1.min.js"></script>
    <script src="{{ asset('/') }}assets/webapp/js/popper.min.js"></script>
    <script src="{{ asset('/') }}assets/webapp/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}assets/webapp/js/owl.carousel.min.js"></script>
    <script src="{{ asset('/') }}assets/webapp/js/jquery.prettyPhoto.js"></script>
    <script src="{{ asset('/') }}assets/webapp/js/isotope.min.js"></script>
    <script src="{{ asset('/') }}assets/webapp/js/custom.js"></script>

    @livewireScripts
</body>

</html>
