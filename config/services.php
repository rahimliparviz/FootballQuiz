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
        'client_id' => '1189282611235779',
        'client_secret' => 'f9d648f2ff81dd48bc713f51d921ac0d',
        'redirect' => 'https://quiz.finalbaku2019.az/callback',
    ],


    'google' => [
        'client_id' => '175577308470-n5rjivo6h7k9haet8edt2gmoqpj5vgbj.apps.googleusercontent.com',
        'client_secret' => 'Nfrwc3sSo-ZWSciD5kgo6njy',
        'redirect' => 'https://quiz.finalbaku2019.az/callbackg'],

];
