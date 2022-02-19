<?php

it('can show payment thanks page', function () {
    $response = $this->get(route('moyasar.callback', ['id' => 'ae5e8c6a-1622-45a5-b7ca-9ead69be722e', 'status' => 'paid', 'message' => 'success', 'amount' => 100]));

    $response->assertStatus(200);
});

it('can save payment info', function () {
    $response = $this->post(route('moyasar.complete'), ['id' => 'ae5e8c6a-1622-45a5-b7ca-9ead69be722e', 'status' => 'paid']);

    $response->assertStatus(201);
});
