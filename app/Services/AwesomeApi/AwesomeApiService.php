<?php

namespace App\Services\AwesomeApi;

use App\Services\AwesomeApi\Endpoints\HasCurrencyQuote;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class AwesomeApiService
{
    use HasCurrencyQuote;

    public PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::baseUrl("https://economia.awesomeapi.com.br/json");
    }


}
