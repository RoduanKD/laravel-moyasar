<?php

namespace RoduanKD\LaravelMoyasar;

use RoduanKD\LaravelMoyasar\Commands\LaravelMoyasarCommand;
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
            ->hasRoute('web')
            ->hasConfigFile('moyasar');
        // ->hasMigration('create_laravel-moyasar_table')
            // ->hasCommand(LaravelMoyasarCommand::class);
    }
}
