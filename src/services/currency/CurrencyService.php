<?php

namespace app\services\currency;

use app\services\Currency\fetcher\CurrencyFetcher;

class CurrencyService
{
    public CurrencyFetcher $currencyFetcher;

    public function __construct(CurrencyFetcher $currencyFetcher) {
        $this->currencyFetcher = $currencyFetcher;
    }

    public function getCrossCurrencyValue (string $firstCurrencyName, string $secondCurrencyName): float|int
    {
        $firstCurrency = $this->currencyFetcher->getCurrencyValue($firstCurrencyName);
        $secondCurrency = $this->currencyFetcher->getCurrencyValue($secondCurrencyName);

        return $firstCurrency / $secondCurrency;
    }

}