@extends('layouts.guest')

@section('title', 'Verify')
@section('class', 'login-page')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ route('mainPage') }}"><b>{{ config('app.name') }}</b></a>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    A fresh verification link has been sent to your email address.
                </div>
            @endif
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new email verification link has been emailed to you!') }}
                </div>
            @endif
            <p class="login-msg-box">Verify Your Email Address</p>
            <p class="login-msg-box">Before proceeding, please check your email for a verification link.</p>
            <p class="login-msg-box">If you did not receive the email,</p>

            <form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-primary btn-block">Click here to request another</button>
            </form>
        </div>
    </div>
</div>
@endsection
