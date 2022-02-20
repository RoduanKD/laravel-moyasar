<?php

use Illuminate\Support\Facades\Event;
use RoduanKD\LaravelMoyasar\Events\TransactionCreated;
use RoduanKD\LaravelMoyasar\Models\Transaction;

it('can show payment thanks page', function () {
    $response = $this->get(route('moyasar.callback', ['id' => 'ae5e8c6a-1622-45a5-b7ca-9ead69be722e', 'status' => 'paid', 'message' => 'success', 'amount' => 100]));

    $response->assertStatus(200);
});

it('can save payment info', function () {
    $transaction = ['id' => 'ae5e8c6a-1622-45a5-b7ca-9ead69be722e', 'status' => 'paid', 'amount' => 200,];
    $response = $this->post(route('moyasar.complete'), $transaction);
    $saved = Transaction::first();

    expect($saved->id)->toBe($transaction['id']);
    Event::assertDispatched(TransactionCreated::class);
    $response->assertStatus(201);
});
