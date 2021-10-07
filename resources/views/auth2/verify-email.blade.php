@extends('layouts.guest')

@section('title', 'Verify')

@section('class', 'login-page')

@section('content')

<div class="register-box">
    <div class="register-logo">
        <a href="{{ route('mainPage') }}"><b>{{ config('app.name', 'Laravel') }}</b></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new email verification link has been emailed to you!') }}
                </div>
            @endif
            <h1>{{ __('Verify Your Email Address') }}</h1>
            <h3>{{ __('Before proceeding, please check your email for a verification link.') }}</h3>
            <h3>{{ __('If you did not receive the email') }},</h3>
            <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
            </form>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
@endsection
