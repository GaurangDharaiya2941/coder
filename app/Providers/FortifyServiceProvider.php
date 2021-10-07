<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\CreateNewUser;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use Illuminate\Support\Facades\RateLimiter;
use App\Actions\Fortify\UpdateUserProfileInformation;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::loginView(function () {
            return view('auth2.login');
        });

        Fortify::authenticateUsing(function(Request $request){
            $user = User::where('email',$request->email)->first();
            if($user && Hash::check($request->password,$user->password)){
                return $user;
            }
        });

         Fortify::registerView(function(){
            return view('auth2.register');
        });

        Fortify::confirmPasswordView( function() {
            return view('auth2.passwords.confirm');
            // return view('auth.confirm-password');
        });

        Fortify::requestPasswordResetLinkView( function() {
            return view('auth2.passwords.email');
        });

        Fortify::resetPasswordView(function ($request) {
            return view('auth2.passwords.reset', ['request' => $request]);
        });

        Fortify::verifyEmailView( function() {
            return view('auth2.verify-email');
            // return view('auth.verify');
        });

        // Fortify::
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        Fortify::twoFactorChallengeView(function () {
            return view('auth.two-factor-challenge');
        });

        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
