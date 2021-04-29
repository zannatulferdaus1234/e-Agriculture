@extends('admin.auth.layout')

@section('auth')
<!--SIGN IN FORM-->
<div class="panel mb-none">
    <div class="panel-content bg-scale-0">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group mt-md">
                <span class="input-with-icon">
                    <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name">
                    <i class="fa fa-user"></i>
                </span>
            </div>
            <div class="form-group mt-md">
                <span class="input-with-icon">
                    <input type="email" class="form-control" id="email" name="email" :value="old('email')" required  placeholder="Email">
                    <i class="fa fa-envelope"></i>
                </span>
            </div>
            <div class="form-group">
                <span class="input-with-icon">
                    <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password" placeholder="Password">
                    <i class="fa fa-key"></i>
                </span>
            </div>
            <div class="form-group">
                <span class="input-with-icon">
                    <input type="password" class="form-control" id="confirm-password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    <i class="fa fa-key"></i>
                </span>
            </div>
            <div class="form-group">
                <div class="checkbox-custom checkbox-primary">
                    <input type="checkbox" id="terms" value="option1">
                    <label class="check" for="terms">I agree </label>  to the <a href="#">Terms and Conditions</a>
                </div>
            </div>

            <div class="form-group">
                <x-jet-button class="btn btn-primary btn-block">
                    {{ __('Register') }}
                </x-jet-button>
            </div>

            <div class="form-group text-center">
                Have an account?, <a href="{{ route('login') }}">Log In</a>
            </div>
        </form>
    </div>
</div>

@endsection
