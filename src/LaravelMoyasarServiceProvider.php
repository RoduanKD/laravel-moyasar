<?php

namespace RoduanKD\LaravelMoyasar;

use Illuminate\Foundation\AliasLoader;
use Moyasar\Facades\Invoice;
use Moyasar\Facades\Payment;
use Moyasar\Providers\LaravelServiceProvider;
use RoduanKD\LaravelMoyasar\Commands\LaravelMoyasarCommand;
use RoduanKD\LaravelMoyasar\Components\Init;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelMoyasarServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-moyasar')
            ->hasViews()
            ->hasViewComponents('moyasar', Init::class)
            ->hasRoute('web')
            ->hasConfigFile('moyasar')
            ->hasMigration('create_transactions_table');
        // ->hasCommand(LaravelMoyasarCommand::class);
    }

    public function packageRegistered()
    {
        $this->app->register(LaravelServiceProvider::class);
    }

    public function packageBooted()
    {
        AliasLoader::getInstance()->alias('payment', Payment::class);
        AliasLoader::getInstance()->alias('invoice', Invoice::class);
    }
}
