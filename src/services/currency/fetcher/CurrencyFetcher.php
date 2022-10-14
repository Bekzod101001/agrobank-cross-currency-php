<?php

namespace app\services\currency\fetcher;

use app\helpers\Helper;
use app\models\Currency;
use app\services\currency\fetcher\interfaces\CurrencyFetcherInterface;

abstract class CurrencyFetcher implements CurrencyFetcherInterface
{
    public array $currencies = [];
}