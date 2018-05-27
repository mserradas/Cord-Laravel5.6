<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        //'client_id' => env('FACEBOOK_ID'),
        //'client_secret' => env('FACEBOOK_SECRET'),
        'client_id' => '170318843643063',
        'client_secret' => '4282e2be73c962521b30fdab257fe1bf',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

    'google' => [
        //'client_id' => env('GOOGLE_ID'),
        //'client_secret' => env('GOOGLE_SECRET'),
        'client_id' => '480223348170-75frpqcshvsejs54civ1quih7bganpe2.apps.googleusercontent.com',
        'client_secret' => '2V0EIGtc4-P7kdN5cz1zJH5j',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],
];
