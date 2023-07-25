<?php

namespace Sprintdigital\XeroLaravel\Commands;

use Illuminate\Console\Command;

class XeroLaravelCommand extends Command
{
    public $signature = 'xero-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
