
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

                <!-- Ask a question -->

                <div class='col-md-9'>
                    <div class="track-order-page">

                        <h2 class="heading-title">Ask your Question</h2>
                        <form class="register-form outer-top-xs" role="form" method="POST" action="{{route('store-question')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="info-title control-label" for="category"> Category <b class="text-danger">*</b></label>
                                <select class="form-control unicase-form-control selectpicker" name="category_id" id="category">
                                    <option value="0" selected disabled>--Select Category--</option>

                                    @foreach($category as $category)
                                        <option value="{{$category->id }}">{{ ucwords($category->name)}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label class="info-title control-label" for="subcategory">SubCategory <b class="text-danger">*</b></label>
                                <select class="form-control unicase-form-control" name="sub_category_id" id="subcategory">
                                    <option value="0" disabled selected> --Select SubCategory</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="info-title control-label" for="grain_varieties">Crops Grain <b class="text-danger">*</b></label>
                                <input type="text" class="form-control unicase-form-control text-input" name="grain_varieties" id="grain_varieties" placeholder="Enter Crops Grain">

                                @error('grain_varieties')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="info-title control-label" for="soil_type">Soli Type <b class="text-danger">*</b></label>
                                <input type="text" class="form-control unicase-form-control text-input" id="soil_type" name="soil_type" placeholder="Enter Soil Type">

                                @error('soil_type')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="info-title control-label" for="title">Title <b class="text-danger">*</b></label>
                                <input type="text" class="form-control unicase-form-control text-input" id="title" name="title" placeholder="Enter Title">

                                @error('title')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="info-title control-label" for="details">Details <b class="text-danger">*</b></label>
                                <textarea type="text" class="form-control unicase-form-control text-input" id="details" name="details"  rows="3" placeholder="Enter details"> </textarea>

                                @error('details')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="info-title control-label" for="image">Image <b class="text-danger">*</b></label>
                                <input type="file" class="form-control unicase-form-control text-input" id="image" name="image" placeholder="Enter Image">

                                @error('image')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>



                            <div class="pull-right">
                                <button type="submit" class="btn-upper btn btn-primary">Submit your question</button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- footer section --><br>
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



    <script type="text/javascript">
        $(document).ready(function ()
        {
            $('#category').on('change',function(){
                var categoryID = $(this).val();
                if(categoryID)
                {
                    $.ajax({
                        url : 'ask-question/' +categoryID,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            // console.log(data);
                            $('#subcategory').empty();
                            $.each(data, function(key,value){
                               $('#subcategory').append('<option value="'+ key +'">'+ value +'</option>');
                            //    console.log(key,value);
                            });
                        }
                    });
                } else
                {
                    $('#subcategory').empty();
                }
            });
        });
    </script>

</body>

</html>


