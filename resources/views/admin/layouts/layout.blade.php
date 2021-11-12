<html lang="en" class="fixed left-sidebar-top">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>E-Agriculture</title>
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/') }}assets/admin/favicon/apple-icon-120x120.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/') }}assets/admin/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/') }}assets/admin/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}assets/admin/favicon/favicon-16x16.png">
    <!--load progress bar-->
    <script src="{{ asset('/') }}assets/admin/vendor/pace/pace.min.js"></script>
    <link href="{{ asset('/') }}assets/admin/vendor/pace/pace-theme-minimal.css" rel="stylesheet" />

    <!--BASIC css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/admin/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/admin/vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/admin/vendor/animate.css/animate.css">
    <!--SECTION css-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <link rel="stylesheet" href="{{ asset('/') }}assets/admin/vendor/toastr/toastr.min.css">
    <!--Magnific popup-->
    <link rel="stylesheet" href="{{ asset('/') }}assets/admin/vendor/magnific-popup/magnific-popup.css">
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/admin/stylesheets/css/style.css">

    <!--status toggle css -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
</head>


<body>
    <div class="wrap">

        <!-- page HEADER -->
        @includeIf('admin.layouts.header')


        <!-- page BODY -->

        <div class="page-body">
            <!-- LEFT SIDEBAR -->
            <div class="left-sidebar">
                <!-- left sidebar HEADER -->
                <div class="left-sidebar-header">
                    <div class="left-sidebar-title">Navigation</div>
                    <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                        <span></span>
                    </div>
                </div>


                <div id="left-nav" class="nano">
                    <div class="nano-content">

                        @includeIf('admin.layouts.navbar')

                    </div>
                </div>

            </div>




            <div class="content">
                @yield('content')
            </div>


        </div>
    </div>
    <!--BASIC scripts-->
    <!-- ========================================================= -->
    <script src="{{ asset('/') }}assets/admin/vendor/jquery/jquery-1.12.3.min.js"></script>
    <script src="{{ asset('/') }}assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}assets/admin/vendor/nano-scroller/nano-scroller.js"></script>

    <!--status toggle javascript-->
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


    <!--TEMPLATE scripts-->
    <!-- ========================================================= -->
    <script src="{{ asset('/') }}assets/admin/javascripts/template-script.min.js"></script>
    <script src="{{ asset('/') }}assets/admin/javascripts/template-init.min.js"></script>
    <!-- SECTION script and examples-->
    <!-- ========================================================= -->
    <!--Notification msj-->
    <script src="{{ asset('/') }}assets/admin/vendor/toastr/toastr.min.js"></script>
    <!--morris chart-->
    <script src="{{ asset('/') }}assets/admin/vendor/chart-js/chart.min.js"></script>
    <!--Gallery with Magnific popup-->
    <script src="{{ asset('/') }}assets/admin/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!--Examples-->
    <script src="{{ asset('/') }}assets/admin/javascripts/examples/dashboard.js"></script>

    <script >
        $('body').on('change','#catagoryStatus',function(){
            var id = $(this).attr('data-id');

            if(this.checked){
                var status=1;
            }else{
                var status =0;
            }

            $.ajax({
                url : 'category/categoryStatus/' +id+ '/' +status,
                type : "GET",
                success:function(result)
                {
                    console.log(result);
                }
            });
        });
    </script>

</body>

</html>
