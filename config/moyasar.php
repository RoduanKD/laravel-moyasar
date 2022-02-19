<?php

return [
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
    'publishable_api_key' => env('MOYASAR_PUBLISHABLE_API_KEY', null),

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
