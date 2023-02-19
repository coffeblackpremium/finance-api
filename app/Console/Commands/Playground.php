<?php

namespace App\Console\Commands;

use App\Services\AwesomeApi\AwesomeApiService;
use Illuminate\Console\Command;

class Playground extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Play command for test';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $service = new AwesomeApiService();

        $json = $service->lastCurrencyCoin()->get();

        $json->json();

        dd($json);

    }
}
