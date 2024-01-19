@extends ('layouts.main')

@section('container')

    <div class="container login-container">
        <h2 class="text-center mb-4">Registration Form</h2>
        <form class="mb-2" action="/register" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label @error('name') is-invalid @enderror">Name :</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="{{ old('name') }}" required>

                @error ('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="username" class="form-label  @error('username') is-invalid @enderror">Username :</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username" value="{{ old('username') }}" required>

                @error ('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="email" class="form-label  @error('email') is-invalid @enderror">Email :</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value="{{ old ('email') }}" required>
                
                @error ('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror


            </div>
            <div class="mb-3">
                <label for="password" class="form-label  @error('password') is-invalid @enderror">Password :</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">

                @error ('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <button type="submit" class="w-100 btn btn-warning">Register</button>
        </form>
        <small class="mt-3 d-block text-center"><a class="text-decoration-none" href="/login">Already Registered?</a></small>
    </div>
@endsection
