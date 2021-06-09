@extends('website.layouts.layout')

@section('content')


<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{ route('all-category') }}">Home</a></li>
                <li class='active'>Login</li>
            </ul>
        </div>
    </div>
</div>

<div class="body-content">

    <div class="sign-in-page">
        <div class="row">
            <!-- Sign-in -->


            <div class="col-md-6 col-sm-6 sign-in">
                <h4 class="">Sign in</h4>

                <p class="">Hello, Welcome to your account.</p>

                <form class="register-form outer-top-xs" role="form" method="POST" action="#">
                    <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                        <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                        <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                </form>
            </div>





        </div>
    </div>
</div>
<br>

@endsection

