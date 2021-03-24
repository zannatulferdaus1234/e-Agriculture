<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<title>Flipmart premium HTML5 & CSS3 Template</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{ asset('assets/website/css/bootstrap.min.css') }}">

<!-- Customizable CSS -->
<link rel="stylesheet" href="{{ asset('assets/website/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/website/css/blue.css') }}">


<!-- Icons/Glyphs -->
<link rel="stylesheet" href="{{ asset('assets/website/css/font-awesome.css') }}">


<!-- sidebar -->
  <link rel="stylesheet" href="{{ asset('/')}}assets/admin/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/')}}assets/admin/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('/')}}assets/admin/css/style.css">

</head>
<body class="cnt-home">



     @include('website.components.header')
     <br>

     @include('website.components.sidebar')



            <!-- FOOTER na thakle o kaj korbe -->
            <br><br><br><br><br><br><br><br><br>
     @includeIF('website.components.footer')




<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/website/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets/website/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/website/js/bootstrap-hover-dropdown.min.js') }}"></script>
<script src="{{ asset('assets/website/js/bootstrap-select.min.js') }}"></script>


<!-- sidebar -->
 <script src="{{ asset('/')}}assets/admin/vendor/jquery/jquery-1.12.3.min.js"></script>
    <script src="{{ asset('/')}}assets/admin/javascripts/template-script.min.js"></script>

</body>

</html>

