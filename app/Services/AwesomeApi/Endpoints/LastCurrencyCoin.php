<?php

namespace App\Services\AwesomeApi\Endpoints;

use App\Services\AwesomeApi\AwesomeApiService;

class LastCurrencyCoin
{

    private AwesomeApiService $service;

    public function __construct()
    {
        $this->service= new AwesomeApiService();
    }

    public function get()
    {
        return $this->service
            ->api
            ->get("last/USD");
    }
}
