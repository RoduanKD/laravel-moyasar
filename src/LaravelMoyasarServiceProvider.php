<?php

namespace RoduanKD\LaravelMoyasar;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RoduanKD\LaravelMoyasar\Commands\LaravelMoyasarCommand;

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
            ->name('laravelmoyasar')
            ->hasViews('laravel-moyasar')
            ->hasRoute('web')
            ->hasConfigFile('moyasar');
            // ->hasMigration('create_laravelmoyasar_table')
            // ->hasCommand(LaravelMoyasarCommand::class);
    }
}
