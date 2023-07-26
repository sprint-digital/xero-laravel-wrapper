<?php

namespace Sprintdigital\XeroLaravel\Commands;

use Illuminate\Console\Command;

class XeroLaravelCommand extends Command
{
    public $signature = 'make:xero-laravel';

    public $description = 'Add all necessary files for Xero Laravel';

    public function handle(): int
    {
        copy(__DIR__.'/../../config/xero-laravel.php', config_path('xero-laravel.php')) ? $this->comment('xero-laravel.php config file created') : $this->comment('xero-laravel.php config file not created');

        copy(__DIR__.'/../../Controllers/XeroController.php.stub', app_path('Controllers/XeroController.php')) ? $this->comment('XeroController.php controller file created') : $this->comment('XeroController.php controller file not created');

        copy(__DIR__.'/../../Models/XeroToken.php.stub', app_path('Models/XeroToken.php')) ? $this->comment('XeroToken.php model file created') : $this->comment('XeroToken.php model file not created');

        $this->comment('All done');

        return self::SUCCESS;
    }
}
