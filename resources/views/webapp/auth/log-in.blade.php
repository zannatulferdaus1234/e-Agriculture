<form action="{{ route('userLoginCheck') }}" method="POST">

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
        <input type="email" class="form-control" placeholder="Enter Email" name="email" value="{{ old('email') }}"
            autofocus autocomplete="email">
    </div>

    <div class="input-group">
        <input type="password" class="form-control" placeholder="Enter Password" name="password">
    </div>

    <div class="input-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck2">
        <label class="form-check-label" for="exampleCheck2">Remember Me</label>
        <a href="{{ route('user_forgotPasswordForm') }}" class="fp">Forgot Password</a>
    </div>

    <div class="input-group">
        <button class="login-btn">Login Account</button>
    </div>
</form>
