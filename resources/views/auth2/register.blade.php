@extends('layouts.guest')

@section('title', 'Register')

@section('class', 'register-page')

@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="{{ route('mainPage') }}"><b>{{ config('app.name', 'Laravel') }}</b></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full name"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                        name="email" value="{{ old('email') }}" required autocomplete="email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                        placeholder="Username" name="username" required autocomplete="username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Password" name="password" required autocomplete="new-password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Retype password"
                        name="password_confirmation" required autocomplete="new-password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <div class="row">
                    <div class="col-4">
                        <a href="#" class="btn btn-block facebook" style="">
                            <i class="fab fa-facebook mr-2"></i>
                            Sign up
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#" class="btn btn-block btn-secondary google">
                            <i class="fab fa-google mr-2"></i>
                            Sign up
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#" class="btn btn-block twitter" style="">
                            <i class="fab fa-twitter mr-2"></i>
                            Sign up
                        </a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <a href="#" class="btn btn-block btn-danger google">
                            <i class="fab fa-google-plus mr-2"></i>
                            Sign up
                        </a>
                    </div>
                    <div class="col-4">
                      <a href="#" class="btn btn-block instagram" style="">
                          <i class="fab fa-instagram mr-2"></i>
                          Sign up
                      </a>
                    </div>
                </div>
            </div>

            <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
@endsection
