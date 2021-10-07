<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'key' => env('GOOGLE_KEY'),
        'secret' => env('GOOGLE_SECRET_KEY'),
        'redirect' => env('GOOGLE_REDIRECT'),
    ],

    'facebook' => [
        'key' => env('FACEBOOK_KEY'),
        'secret' => env('FACEBOOK_SECRET_KEY'),
        'redirect' => env('FACEBOOK_REDIRECT'),
    ],

    'twitter' => [
        'key' => env('TWITTER_KEY'),
        'secret' => env('TWITTER_SECRET_KEY'),
        'redirect' => env('TWITTER_REDIRECT'),
    ],

    'instagram' => [
        'key' => env('INSTAGRAM_KEY'),
        'secret' => env('INSTAGRAM_SECRET_KEY'),
        'redirect' => env('INSTAGRAM_REDIRECT'),
    ],
];
