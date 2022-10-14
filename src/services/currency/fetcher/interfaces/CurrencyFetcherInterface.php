<?php

namespace app\services\currency\fetcher\interfaces;

interface CurrencyFetcherInterface {
    public function getCurrencyValue (string $name) : float|int;

    public function loadCurrencies ();
}