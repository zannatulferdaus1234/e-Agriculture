@extends('webapp.layout.layout2')

@section('content')

    <div class="wrapper home2">

        <section class="wf100 p100 inner-header">
            <div class="container">
                <h1>My Account</h1>
                <ul>
                    <li><a href="{{ route('webapp') }}">Home</a></li>
                    <li><a href="javascript:avoid(0)"> My Account </a></li>
                </ul>
            </div>
        </section>
        <!--Inner Header End-->
        <!--Causes Start-->
        <section class="wf100 p80">
            <div class="container">
                <div class="row">

                    <div class="mx-auto col-lg-6 ">
                        <div class="login-box">
                            <h3>Reset Password </h3>
                            <form action="{{ route('user_resetPassword') }}" method="POST">

                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="input-group">
                                    <input type="email" id="email" class="form-control" name="email"
                                        value="{{ old('email') }}" autofocus autocomplete="email"
                                        placeholder="Enter Email">
                                </div>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <div class="input-group">
                                    <input id="password" type="password" class="form-control" name="password"
                                        autocomplete="new-password" placeholder="Enter Password">
                                </div>
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                <div class="input-group">
                                    <input class="form-control" placeholder="Re-enter Password" type="password"
                                        name="password_confirmation" autocomplete="new-password">
                                </div>
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror


                                <div class="input-group">
                                    <button class="login-btn">Send</button>
                                </div>
                            </form>
                            <div class="d-flex justify-content-center">
                                <p class="mx-auto text-white">You remembered?,<a class="text-white"
                                        href="{{ route('userRegistration') }}"> Sign in!</a></p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endsection
