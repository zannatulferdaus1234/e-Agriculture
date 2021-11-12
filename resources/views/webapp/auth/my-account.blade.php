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
                    <div class="col-lg-8">
                        <div class="myaccount-form">
                            <h3>Register Your Account</h3>
                            @includeIf('webapp.auth.registration')
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="login-box">
                            <h3>Login Account</h3>
                            @includeIf('webapp.auth.log-in')
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endsection
