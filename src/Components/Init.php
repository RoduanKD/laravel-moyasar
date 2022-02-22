<?php

namespace RoduanKD\LaravelMoyasar\Components;

use Illuminate\View\Component;
use RoduanKD\LaravelMoyasar\Exceptions\AmountCanNotBeNegativeException;
use RoduanKD\LaravelMoyasar\Exceptions\PublishableApiKeyDoesNotExist;

class Init extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public int $amount,
        public ?string $element = null,
        public ?string $description = null,
        public ?string $callback = null,
        public ?string $onComplete = null,
        public ?array $methods = null
    ) {
        if ($this->amount < 0) {
            throw new AmountCanNotBeNegativeException('amount can not be negative, you provided: ' . $this->amount);
        }

        if (! config('moyasar.publishable_key')) {
            throw new PublishableApiKeyDoesNotExist('key "MOYASAR_PUBLISHABLE_KEY" is not defined in .env');
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('moyasar::init');
    }
}
