<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Moyasar API Key
    |--------------------------------------------------------------------------
    |
    | Don't forget to set this in your .env file, as it will be used to contact
    | Moyasar servers
    |
    */
    'key' => env('MOYASAR_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Moyasar Publishable API Key
    |--------------------------------------------------------------------------
    |
    | This key is used for payment forms on the frontend
    |
    */
    'publishable_key' => env('MOYASAR_API_PUBLISHABLE_KEY'),

    'table' => 'transactions',
    // Required
    // Specify where to render the form
    // Can be a valid CSS selector and a reference to a DOM element
    'element' => '.mysr-form',

    // Required
    // Currency of the payment transaction
    'currency' => env('MOYASAR_CURRENCY', 'USD'),

    // Required
    // A small description of the current payment process
    'description' => 'default description',

    // Required
    // This URL is used to redirect the user when payment process has completed
    // Payment can be either a success or a failure, which you need to verify on you system (We will show this in a couple of lines)
    'callback_url' => 'moyasar.callback',

    // Highly recommended
    // This URL is use by moyasar to send to save the payment ID before redirecting the user to 3-D Secure
    // this is the default on complete route name
    'on_complete_url' => 'moyasar.complete',

    // Optional
    // Required payments methods
    // Default: ['creditcard', 'applepay', 'stcpay']
    'methods' => ['creditcard', 'applepay', 'stcpay'],
];
