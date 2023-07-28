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
        // Start of config
        if (file_exists(config_path('xero-laravel.php'))) {
            $this->comment('xero-laravel.php config file already exists');
        } else {
            copy(__DIR__ . '/../../config/xero-laravel.php', config_path('xero-laravel.php')) ? $this->comment('xero-laravel.php config file created') : $this->comment('xero-laravel.php config file not created');
        }
        // End of config

        // Start of models
        if (file_exists(app_path('Models/XeroToken.php'))) {
            $this->comment('XeroToken.php model file already exists');
        } else {
            copy(__DIR__ . '/../../Models/XeroToken.php.stub', app_path('Models/XeroToken.php')) ? $this->comment('XeroToken.php model file created') : $this->comment('XeroToken.php model file not created');
        }

        if (file_exists(app_path('Models/XeroContact.php'))) {
            $this->comment('XeroContact.php model file already exists');
        } else {
            copy(__DIR__ . '/../../Models/XeroContact.php.stub', app_path('Models/XeroContact.php')) ? $this->comment('XeroContact.php model file created') : $this->comment('XeroContact.php model file not created');
        }

        if (file_exists(app_path('Models/XeroItem.php'))) {
            $this->comment('XeroItem.php model file already exists');
        } else {
            copy(__DIR__ . '/../../Models/XeroItem.php.stub', app_path('Models/XeroItem.php')) ? $this->comment('XeroItem.php model file created') : $this->comment('XeroItem.php model file not created');
        }

        if (file_exists(app_path('Models/Invoice.php'))) {
            $this->comment('Invoice.php model file already exists');
        } else {
            copy(__DIR__ . '/../../Models/Invoice.php.stub', app_path('Models/Invoice.php')) ? $this->comment('Invoice.php model file created') : $this->comment('Invoice.php model file not created');
        }

        if (file_exists(app_path('Models/InvoiceLineItem.php'))) {
            $this->comment('InvoiceLineItem.php model file already exists');
        } else {
            copy(__DIR__ . '/../../Models/InvoiceLineItem.php.stub', app_path('Models/InvoiceLineItem.php')) ? $this->comment('InvoiceLineItem.php model file created') : $this->comment('InvoiceLineItem.php model file not created');
        }

        if (file_exists(app_path('Models/InvoiceStatus.php'))) {
            $this->comment('InvoiceStatus.php model file already exists');
        } else {
            copy(__DIR__ . '/../../Models/InvoiceStatus.php.stub', app_path('Models/InvoiceStatus.php')) ? $this->comment('InvoiceStatus.php model file created') : $this->comment('InvoiceStatus.php model file not created');
        }
        // End of models

        // Start of services
        if (file_exists(app_path('Services/Xero/XeroBaseService.php'))) {
            $this->comment('XeroBaseService.php service file already exists');
        } else {
            copy(__DIR__ . '/../../Services/XeroBaseService.php.stub', app_path('Services/Xero/XeroBaseService.php')) ? $this->comment('XeroBaseService.php service file created') : $this->comment('XeroBaseService.php service file not created');
        }

        if (file_exists(app_path('Services/Xero/XeroContactService.php'))) {
            $this->comment('XeroContactService.php service file already exists');
        } else {
            copy(__DIR__ . '/../../Services/XeroContactService.php.stub', app_path('Services/Xero/XeroContactService.php')) ? $this->comment('XeroContactService.php service file created') : $this->comment('XeroContactService.php service file not created');
        }

        if (file_exists(app_path('Services/Xero/XeroInvoiceService.php'))) {
            $this->comment('XeroInvoiceService.php service file already exists');
        } else {
            copy(__DIR__ . '/../../Services/XeroInvoiceService.php.stub', app_path('Services/Xero/XeroInvoiceService.php')) ? $this->comment('XeroInvoiceService.php service file created') : $this->comment('XeroInvoiceService.php service file not created');
        }
        // End of services

        // Start of controllers
        if (file_exists(app_path('Http/Controllers/XeroController.php'))) {
            $this->comment('XeroController.php controller file already exists');
        } else {
            copy(__DIR__ . '/../../Controllers/XeroController.php.stub', app_path('Http/Controllers/XeroController.php')) ? $this->comment('XeroController.php controller file created') : $this->comment('XeroController.php controller file not created');
        }
        // End of controllers

        // Start of Jobs
        if (file_exists(app_path('Jobs/SendXeroInvoice.php'))) {
            $this->comment('SendXeroInvoice.php job file already exists');
        } else {
            copy(__DIR__ . '/../../Jobs/SendXeroInvoice.php.stub', app_path('Jobs/SendXeroInvoice.php')) ? $this->comment('SendXeroInvoice.php job file created') : $this->comment('SendXeroInvoice.php job file not created');
        }
        // End of Jobs

        // Start of commands
        if (file_exists(app_path('Console/Commands/PullXeroContacts.php'))) {
            $this->comment('PullXeroContacts.php command file already exists');
        } else {
            copy(__DIR__ . '/../../Commands/PullXeroContacts.php.stub', app_path('Console/Commands/PullXeroContacts.php')) ? $this->comment('PullXeroContacts.php job file created') : $this->comment('PullXeroContacts.php job file not created');
        }

        if (file_exists(app_path('Console/Commands/PullXeroItems.php'))) {
            $this->comment('PullXeroItems.php command file already exists');
        } else {
            copy(__DIR__ . '/../../Commands/PullXeroItems.php.stub', app_path('Console/Commands/PullXeroItems.php')) ? $this->comment('PullXeroItems.php job file created') : $this->comment('PullXeroItems.php job file not created');
        }
        // End of commands

        // Start of migrations
        Artisan::call('vendor:publish --tag="xero-laravel-migrations"');
        $this->comment('Migration files created');
        // End of migrations


        $this->comment('All done');

        return self::SUCCESS;
    }
}
