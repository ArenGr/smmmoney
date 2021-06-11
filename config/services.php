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
        'region' => 'us-east-1',
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
        'client_id' => '315777760092002',
        'client_secret' => 'e29828ab1b72787c151523d6f11e32f2',
        'redirect' => 'http://localhost:8000/api/callback',
    ],

    'odnoklassniki' => [
        'client_id' => env('ODNOKLASSNIKI_CIENT_ID'),
        'client_secret' => env('ODNOKLASSNIKI_SECRET'),
        'client_public' => env('ODNOKLASSNIKI_PUBLIC'),
        'redirect' => env('ODNOKLASSNIKI_REDIRECT'),
//        'client_id' => '1262206464',
//        'client_secret' => '0A7FDFB947E273CEB2B50E3D',
//        'client_public' => 'CBAPLMDMEBABABABA',
//        'redirect' => 'https://smmmoney.com/login/odnoklassniki/callback',
//        'SOCIAL_AUTH_ODNOKLASSNIKI_OAUTH2_KEY' => '1262206464',
//        'SOCIAL_AUTH_ODNOKLASSNIKI_OAUTH2_SECRET' => '0A7FDFB947E273CEB2B50E3D',
//        'SOCIAL_AUTH_ODNOKLASSNIKI_OAUTH2_PUBLIC_NAME' => 'CBAPLMDMEBABABABA',
//         'redirect' => 'localhost:8000/api/callback',

    ],

];
