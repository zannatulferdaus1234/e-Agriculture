<!doctype html>
<html lang="en" class="fixed accounts sign-in">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Helsinki</title>
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/') }}assets/admin/favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/') }}assets/admin/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/') }}assets/admin/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}assets/admin/favicon/favicon-16x16.png">
    <link rel="stylesheet" href="{{ asset('/') }}assets/admin/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/admin/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/admin/vendor/animate.css/animate.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/admin/stylesheets/css/style.css">
</head>

<body>
<div class="wrap">
    <!-- page BODY -->
    <div class="page-body animated slideInDown">
        <!--LOGO-->
        <div class="logo">
            <img alt="logo" src="images/logo-dark.png" />
        </div>

        <div class="box">

            <!--SIGN IN FORM / RWGISTER-->
            @yield('auth')
        </div>

    </div>
</div>


<script src="{{ asset('/') }}assets/admin/vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="{{ asset('/') }}assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}assets/admin/vendor/nano-scroller/nano-scroller.js"></script>
<script src="{{ asset('/') }}assets/admin/javascripts/template-script.min.js"></script>
<script src="{{ asset('/') }}assets/admin/javascripts/template-init.min.js"></script>

</body>

</html>
