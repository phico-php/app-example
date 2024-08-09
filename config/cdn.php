<?php

return [

    'use' => env('CDN_USE', 'default'),

    'connections' => [

        'aws' => [
            'access_key' => env('CDN_ACCESS_KEY', ''),
            'secret_key' => env('CDN_SECRET_KEY', ''),
            'bucket_name' => env('CDN_BUCKET_NAME', ''),
            'region' => env('CDN_REGION', 'auto'),
            'endpoint' => env('CDN_ENDPOINT', ''),
        ],

        'cloudflare' => [
            'account_id' => env('CDN_CLOUDFLARE_ACCOUNT_ID', ''),
            'access_key' => env('CDN_CLOUDFLARE_ACCESS_KEY', ''),
            'secret_key' => env('CDN_CLOUDFLARE_SECRET_KEY', ''),
            'bucket_name' => env('CDN_CLOUDFLARE_BUCKET_NAME', ''),
            'region' => env('CDN_CLOUDFLARE_REGION', 'auto'),
            'endpoint' => env('CDN_CLOUDFLARE_ENDPOINT', ''),
        ],

        'tigris' => [
            'access_key' => env('CDN_TIGRIS_ACCESS_KEY', ''),
            'secret_key' => env('CDN_TIGRIS_SECRET_KEY', ''),
            'bucket_name' => env('CDN_TIGRIS_BUCKET_NAME', ''),
            'region' => env('CDN_TIGRIS_REGION', 'auto'),
            'endpoint' => env('CDN_TIGRIS_ENDPOINT', ''),
        ]
    ],
];
