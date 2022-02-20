<?php

use Illuminate\Support\Facades\Route;
use RoduanKD\LaravelMoyasar\Controllers\PaymentController;

Route::get('/payment/thanks', function () {
    return 'working';
})->name('moyasar.callback');

Route::post('/checkout/save-payment', [PaymentController::class, 'store'])->name('moyasar.complete');
