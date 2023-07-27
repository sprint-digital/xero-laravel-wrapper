<?php

namespace Sprintdigital\XeroLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sprintdigital\XeroLaravel\Commands\XeroLaravelCommand;

class XeroLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('xero-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_xero_tokens_table')
            ->hasMigration('create_xero_contacts_table')
            ->hasMigration('create_xero_items_table')
            ->hasCommand(XeroLaravelCommand::class);
    }
}
