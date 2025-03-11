<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MemoryMonitor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'memory:monitor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Monitor memory usage';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo __('messages.memory_exceeded')."\n";
    }
}