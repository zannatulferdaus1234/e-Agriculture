@extends('admin.auth.layout')

@section('auth')
<!--SIGN IN FORM-->
<div class="panel mb-none">
    <div class="panel-content bg-scale-0">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group mt-md">
                <span class="input-with-icon">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}" required>
                    <i class="fa fa-envelope"></i>
                </span>
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <span class="input-with-icon">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                    <i class="fa fa-key"></i>
                </span>
                @error('password')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <div class="checkbox-custom checkbox-primary">
                    <input type="checkbox" id="remember_me" name="remember" value="option1" checked>
                    <label class="check" for="remember-me">{{ __('Remember me') }}</label>
                </div>
            </div>

            <div class="form-group ">
                <x-jet-button class="btn btn-primary btn-block text-md">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>

            <div class="form-group text-center">
                @if (Route::has('password.request'))
                    <a class="" href="{{ route('forgotPassword')}}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <hr/>
                 <span>Don't have an account?</span>
                <a href="{{ route('register')}}" class="btn btn-block mt-sm">Register</a>
            </div>



        </form>
    </div>
</div>

@endsection
