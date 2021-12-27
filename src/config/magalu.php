<?php


return [

    /*
    |--------------------------------------------------------------------------
    | Default PagSeguro configs  
    |--------------------------------------------------------------------------
    |
    | This option is the default configs for the PagSeguro.
    | 
    |
    */

    'user'      => env('MAGALU_USER'),
    'token'     => env('MAGALU_PASSWORD'),
    'sandbox'   => env('MAGALU_SANDBOX', true),
    'host'      => array(
        'sandbox'           => 'https://api.integracommerce.com.br/api/',
        'production'        => 'https://in.integracommerce.com.br/api/',
    ),
];
