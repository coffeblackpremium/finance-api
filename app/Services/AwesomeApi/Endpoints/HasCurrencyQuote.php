<?php


namespace App\Services\AwesomeApi\Endpoints;

trait HasCurrencyQuote
{
    public function lastCurrencyCoin(): LastCurrencyCoin
    {
        return new LastCurrencyCoin();
    }
}
