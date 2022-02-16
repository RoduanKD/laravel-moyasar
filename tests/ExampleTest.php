<?php

it('can export head partials', function () {
    $original = file_get_contents(__DIR__ . '/../resources/views/head.blade.php');
    $compiled = view('moyasar::head')->render();

    expect($compiled)->toBe($original);
});
