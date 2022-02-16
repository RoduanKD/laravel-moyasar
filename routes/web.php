<?php

use Illuminate\Support\Facades\Route;

Route::post('/moyasar/thanks', function () {
    return 'working';
})->name('moyasar.callback');
