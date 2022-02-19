<?php

use Illuminate\Support\Facades\Route;

Route::get('/payment/thanks', function () {
    return 'working';
})->name('moyasar.callback');

Route::post('/checkout/save-payment', function () {
    return response('', 201);
})->name('moyasar.complete');
