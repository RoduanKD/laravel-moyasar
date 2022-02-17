<?php

namespace RoduanKD\LaravelMoyasar;

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
            ->hasConfigFile('moyasar');
        // ->hasMigration('create_laravel-moyasar_table')
            // ->hasCommand(LaravelMoyasarCommand::class);
    }
}
