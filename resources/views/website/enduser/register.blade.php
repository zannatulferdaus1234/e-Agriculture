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

                <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label class="info-title" for="email">Email Address <span>*</span></label>
                        <input type="email" class="form-control unicase-form-control text-input" id="email" name="email" :value="old('email')" required autofocus>
                    </div>
                    <div class="form-group">
                        <label class="info-title" for="password">Password <span>*</span></label>
                        <input type="password" class="form-control unicase-form-control text-input" id="password" name="password" required autocomplete="current-password">
                    </div>

                    <div class="radio outer-xs">
                        <label for="remember_me">
                            <input type="radio" id="remember_me" name="remember" value="option2">{{ __('Remember me') }}
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="forgot-password pull-right">{{ __('Forgot your password?') }}</a>
                        @endif
                    </div>


                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button">{{ __('Log in') }}</button>
                </form>
            </div>


            <!-- create a new account -->
            <div class="col-md-6 col-sm-6 create-new-account">
                <h4 class="checkout-subtitle">Create a new account</h4>
                <p class="text title-tag-line">Create your new account.</p>

                <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('create-register') }}">
                    @csrf

                    <div class="form-group">
                        <label class="info-title" for="name" >Name<span>*</span></label>
                        <input type="text" class="form-control unicase-form-control text-input" id="name" name="name" :value="old('name')" required >

                        @error('name')
                            <p class="text-danger">{{$message}}
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="info-title" for="email">Email Address <span>*</span></label>
                        <input type="email" class="form-control unicase-form-control text-input" id="email" name="email" :value="old('email')" required>
                        @error('email')
                            <p class="text-danger">{{$message}}
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="info-title" for="password">Password <span>*</span></label>
                        <input type="password" class="form-control unicase-form-control text-input" id="password"  name="password" required >

                        @error('password')
                            <p class="text-danger">{{$message}}
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="info-title" for="password_confirmation">Confirm Password <span>*</span></label>
                        <input type="password" class="form-control unicase-form-control text-input" id="password_confirmation" name="password_confirmation" required >

                        @error('password_confirmation')
                            <p class="text-danger">{{$message}}
                        @enderror
                    </div>


                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Register</button>


                </form>

            </div>

        </div>
    </div>
</div>
<br>

@endsection

