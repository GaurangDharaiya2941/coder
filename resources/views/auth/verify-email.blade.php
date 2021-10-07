@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new email verification link has been emailed to you!') }}
                </div>
            @endif
        </div>
        <div class="col-md-8">
            <h1>{{ __('Verify Your Email Address') }}</h1>
            <h3>{{ __('Before proceeding, please check your email for a verification link.') }}</h3>
            <h3>{{ __('If you did not receive the email') }},</h3>
            <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
            </form>
        </div>
    </div>
</div>
@endsection
