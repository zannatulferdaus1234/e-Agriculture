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

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@1.3.1/dist/trix.css">

    <link href="{{ asset('/') }}assets/webapp/css/custom.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/webapp/css/color.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/webapp/css/responsive.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/webapp/css/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/webapp/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/webapp/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/webapp/css/all.min.css" rel="stylesheet">


    <!-- CSS FILES End -->
</head>

<body>
    <div class="wrapper home2">

        <!--Inner Header Start-->
    <section class="wf100 p100 inner-header">
        <div class="container">
            <h1>Ask Your Question</h1>
            <ul>
                <li><a href="{{ route('webapp') }}">Home</a></li>
                <li><a href="">Reviews</a></li>
            </ul>
        </div>
    </section>

    <section class="wf100 p80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="myaccount-form">

                        <div class="d-flex justify-content-between align-items-baseline">
                            <h3>Post Your feedback</h3>

                            <a class=" btn btn-success text-light float-right" href="{{ url()->previous() }}">Back to the
                                previous page</a>
                        </div>

                        <form method="POST" action="{{ route('store-review') }}" >
                            @csrf
                            <div class="row">


                                <div class="col-md-12">
                                    <div class="input-group">
                                            <textarea class="form-control" rows="5" name="review" id="review" value="{{old('review')}}" placeholder="Write Your Feedback Here..."></textarea>
                                    </div>
                                    @error('review')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="col-md-12">
                                    <button class="register">Post Your Question</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

        @includeIf('webapp.layout.footer')

    </div>

    <script type="text/javascript" src="https://unpkg.com/trix@1.3.1/dist/trix.js"></script>
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



</body>

</html>



