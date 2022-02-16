<?php

namespace RoduanKD\LaravelMoyasar\Commands;

use Illuminate\Console\Command;

class LaravelMoyasarCommand extends Command
{
    public $signature = 'laravel-moyasar';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
