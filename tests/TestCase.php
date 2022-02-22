<?php

namespace RoduanKD\LaravelMoyasar\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Orchestra\Testbench\TestCase as Orchestra;
use RoduanKD\LaravelMoyasar\LaravelMoyasarServiceProvider;

class TestCase extends Orchestra
{
    use InteractsWithViews;

    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'RoduanKD\\LaravelMoyasar\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelMoyasarServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        config()->set('moyasar.publishable_key', 'sk_test_MrtwozLJAuFmLKWWSaRaoaLX');

        $migration = include __DIR__.'/../database/migrations/create_transactions_table.php.stub';
        $migration->up();

        $fake = Event::fake();
        DB::setEventDispatcher($fake);
    }
}
