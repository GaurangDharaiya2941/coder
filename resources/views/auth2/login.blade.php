@extends('layouts.guest')

@section('title', 'Log in')

@section('class', 'login-page')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/') }}"><b>{{ config('app.name', 'Laravel') }}</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="input-group mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
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
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <div class="row">
                    <div class="col-4">
                        <a href="#" class="btn btn-block facebook">
                            <i class="fab fa-facebook mr-2"></i> Sign in
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#" class="btn btn-block btn-secondary google">
                            <i class="fab fa-google mr-2"></i> Sign in
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#" class="btn btn-block twitter">
                            <i class="fab fa-twitter mr-2"></i> Sign in
                        </a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <a href="#" class="btn btn-block instagram">
                            <i class="fab fa-instagram mr-2"></i> Sign in
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#" class="btn btn-block btn-danger google">
                            <i class="fab fa-google-plus mr-2"></i> Sign in
                        </a>
                    </div>
                    <div class="col-4 d-none">
                        <a href="#" class="btn btn-block btn-danger google">
                            <i class="fab fa-google-plus mr-2"></i> Sign in
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.social-auth-links -->

            @if (Route::has('password.request'))
            <p class="mb-1">
                <a href="{{ route('password.request') }}">I forgot my password</a>
            </p>
            @endif

            @if (Route::has('register'))
            <p class="mb-0">
                <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
            </p>
            @endif

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
@endsection
