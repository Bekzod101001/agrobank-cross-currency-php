<?php


namespace app\controllers;

use app\adapters\Currency\GetCrossCurrencyConsoleArgsAdapter;
use app\adapters\Currency\GetCurrencyConsoleArgsAdapter;
use app\core\ConsoleArgs;
use app\core\Controller;
use app\services\currency\CurrencyService;
use app\services\currency\fetcher\CbuCurrencyFetcher;

class CurrencyController extends Controller
{
    public CurrencyService $currencyService;

    public function __construct () {
        $cbuCurrencyFetcher = new CbuCurrencyFetcher();
        $this->currencyService = new CurrencyService($cbuCurrencyFetcher);
    }

    public function getCrossCurrency (ConsoleArgs $consoleArgs): string
    {
        $args = new GetCrossCurrencyConsoleArgsAdapter($consoleArgs);
        $crossCurrencyValue = $this->currencyService->getCrossCurrencyValue($args->firstCurrency, $args->secondCurrency);

        return "Cross currency rate based on UZS of $args->firstCurrency/$args->secondCurrency is: $crossCurrencyValue \n";

    }
    public function getCurrency (ConsoleArgs $consoleArgs): string
    {
        $args = new GetCurrencyConsoleArgsAdapter($consoleArgs);
        $currencyValue = $this->currencyService->currencyFetcher->getCurrencyValue($args->currency);
        return "$args->currency rate is: $currencyValue \n";
    }

}