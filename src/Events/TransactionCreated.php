<?php

namespace RoduanKD\LaravelMoyasar\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TransactionCreated
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @param  string  $payment_id
     * @param  array|null  $parameters route parameters
     *
     * @return void
     */
    public function __construct(public string $payment_id, public ?array $parameters = [])
    {
        //
    }
}
