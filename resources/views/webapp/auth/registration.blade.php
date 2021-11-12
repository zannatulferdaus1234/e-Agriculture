<form action="{{ route('create_userRegistration') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <ul class="row">
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Your Name" name="name" value="{{ old('name') }}">
            </div>
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-md-6">
            <div class="input-group">
                <input type="email" class="form-control" placeholder="Enter your email " name="email"
                    value="{{ old('email') }}">
            </div>
            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-md-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter your Phone no. " name="phone"
                    value="{{ old('phone') }}">
            </div>
            @error('phone')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


        <div class="col-md-6">
            <div class="input-group">
                <input type="file" class="form-control" placeholder="Enter your email " name="avatar"
                    value="{{ old('avatar') }}">
            </div>
            @error('avatar')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-md-6">
            <div class="input-group">
                <input type="password" class="form-control" placeholder="Password" name="password"
                    autocomplete="new-password">
            </div>
            @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-md-6">
            <div class="input-group">
                <input class="form-control" placeholder="Re-enter Password" type="password" name="password_confirmation"
                    autocomplete="new-password">
            </div>
            @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-md-12">
            <button class="register">Register Your Account</button>
        </div>
    </ul>
</form>
