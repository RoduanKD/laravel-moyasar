<?php

namespace RoduanKD\LaravelMoyasar\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use RoduanKD\LaravelMoyasar\Events\TransactionCreated;
use RoduanKD\LaravelMoyasar\Models\Transaction;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $transaction = Transaction::create([
            'id' => $request->id,
            'amount' => $request->amount,
            'status' => $request->status,
            'meta' => json_encode($request->except(['id', 'amount', 'status'])),
        ]);

        Event::dispatch(new TransactionCreated($transaction->id, ...$request->route()->parameters));

        return response('', 201);
    }
}
