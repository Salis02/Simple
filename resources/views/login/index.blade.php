@extends ('layouts.main')

@section('container')
    <div class="container login-container">
        <h2 class="text-center mb-4">Login</h2>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="/login" method="post" class="mb-2">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label"><b>Email :</b></label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="Enter your email" value="{{ old('email') }}" autofocus required>
    
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
    
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"><b>Password :</b></label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Login</button>
                </form>
            </div>
        </div>
        <small class="d-block text-center">Not Registered? <a class="text-decoration-none" href="/register">Register
                Now!</a></small>
    </div>
@endsection
