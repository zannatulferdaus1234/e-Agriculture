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


    @livewireStyles
    <!-- CSS FILES End -->
</head>

<body>
    <div class="wrapper home2">

        @yield('content')

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

    <script src="{{ asset('/') }}assets/website/js/jquery-1.11.1.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#category').on('change', function() {
                var categoryID = $(this).val();
                if (categoryID) {
                    $.ajax({
                        url: 'ask-question/' + categoryID,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            // console.log(data);
                            $('#subcategory').empty();
                            $.each(data, function(key, value) {
                                $('#subcategory').append('<option value="' + key +
                                    '">' + value + '</option>');
                                //    console.log(key,value);
                            });
                        }
                    });
                } else {
                    $('#subcategory').empty();
                }
            });
        });

    </script>

    @livewireScripts

</body>

</html>
