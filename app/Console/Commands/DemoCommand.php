<?php

namespace App\Console\Commands;
;
use Illuminate\Console\Command;

class DemoCommand extends Command
{
    protected $signature = 'demo';

    public function handle()
    {
        ray('here')->hide();
    }
}
