<?php

namespace Mht\Example;

use Mht\Example\Commands\ExampleCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-example-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-example-package_table')
            ->hasCommand(ExampleCommand::class);
    }
}
