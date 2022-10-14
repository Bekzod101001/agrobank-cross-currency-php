<?php

namespace app\services\currency\fetcher;

use app\exceptions\CurrencyNotFoundException;
use app\helpers\Helper;
use app\models\Currency;

class CbuCurrencyFetcher extends CurrencyFetcher
{
    public static string $URL = 'https://cbu.uz/uz/arkhiv-kursov-valyut/json/';
    public static string $KEY_FOR_CURRENCY_NAME = 'Ccy';
    public static string $KEY_FOR_CURRENCY_VAlUE = 'Rate';
    public function __construct() {
        $this->loadCurrencies();
    }

    public function loadCurrencies()
    {
        $firstLoadedCurrencies = json_decode(file_get_contents(self::$URL), true);
        $this->currencies = array_map(function ($currency) {
            $newCurrency = new Currency();
            $newCurrency->name = $currency[self::$KEY_FOR_CURRENCY_NAME];
            $newCurrency->value = $currency[self::$KEY_FOR_CURRENCY_VAlUE];
            return $newCurrency;
        }, $firstLoadedCurrencies);
    }

    public function getCurrencyValue (string $name) : int|float
    {
        $currency = Helper::findItemFromArrayByKey($this->currencies, 'name', $name);
        if(!$currency) {
            throw new CurrencyNotFoundException();
        }
        return $currency->value;
    }
}