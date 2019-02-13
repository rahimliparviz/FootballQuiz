<?php

use App\User;

return [
    'model' => User::class,
    'table' => 'oauth_identities',
    'providers' => [
        'facebook' => [
            

            'client_id' => '1189282611235779',
            'client_secret' => 'f9d648f2ff81dd48bc713f51d921ac0d',

            'redirect_uri' => 'https://quiz.finalbaku2019.az/facebook/redirect',
            'scope' => [],
        ],
        'google' => [
            'client_id' => '175577308470-n5rjivo6h7k9haet8edt2gmoqpj5vgbj.apps.googleusercontent.com',
            'client_secret' => 'Nfrwc3sSo-ZWSciD5kgo6njy',
            'redirect_uri' => config('app.url').'/google/redirect',
            'scope' => [],
        ],
        'github' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/github/redirect',
            'scope' => [],
        ],
        'linkedin' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/linkedin/redirect',
            'scope' => [],
        ],
        'instagram' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/instagram/redirect',
            'scope' => [],
        ],
        'soundcloud' => [
            'client_id' => '12345678',
            'client_secret' => 'y0ur53cr374ppk3y',
            'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
            'scope' => [],
        ],
    ],
];
