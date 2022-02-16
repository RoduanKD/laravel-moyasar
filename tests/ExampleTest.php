<?php

it('can export head partials', function () {
    $original = file_get_contents(__DIR__ . '/../resources/views/head.blade.php');
    $compiled = view('laravel-moyasar::head')->render();

    expect($compiled)->toBe($original);
});

// it('can initialize using only required vars', function () {
//     $original = file_get_contents(__DIR__ . '/../resources/views/init.blade.php');
//     $compiled = view('laravel-moyasar::init', ['amount' => 100])->render();
// });
