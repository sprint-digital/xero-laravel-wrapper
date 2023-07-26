<?php

namespace Sprintdigital\XeroLaravel\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class XeroLaravelCommand extends Command
{
    public $signature = 'xero-laravel:install';

    public $description = 'Add all necessary files for Xero Laravel and migrate the database';

    public function handle(): int
    {
        if (file_exists(config_path('xero-laravel.php'))) {
            $this->comment('xero-laravel.php config file already exists');
        } else {
            copy(__DIR__ . '/../../config/xero-laravel.php', config_path('xero-laravel.php')) ? $this->comment('xero-laravel.php config file created') : $this->comment('xero-laravel.php config file not created');
        }

        if (file_exists(app_path('Models/XeroToken.php'))) {
            $this->comment('XeroToken.php model file already exists');
        } else {
            copy(__DIR__ . '/../../Models/XeroToken.php.stub', app_path('Models/XeroToken.php')) ? $this->comment('XeroToken.php model file created') : $this->comment('XeroToken.php model file not created');
        }

        if (file_exists(app_path('Http/Controllers/XeroController.php'))) {
            $this->comment('XeroController.php controller file already exists');
        } else {
            copy(__DIR__ . '/../../Controllers/XeroController.php.stub', app_path('Http/Controllers/XeroController.php')) ? $this->comment('XeroController.php controller file created') : $this->comment('XeroController.php controller file not created');
        }

        Artisan::call('vendor:publish --tag="xero-laravel-migrations"');
        $this->comment('create_xero_tokens_table migration file created');

        $this->comment('All done');

        return self::SUCCESS;
    }
}
