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
                            <h3>Forgot Password ?</h3>
                            <form action="{{ route('user_forgotPassword') }}" method="POST">

                                @if (Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @csrf
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Enter Email" name="email"
                                        value="{{ old('email') }}" autofocus autocomplete="email">
                                </div>


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
