<?php

namespace app\adapters\Currency;

use app\adapters\ConsoleArgAdapter;
use app\core\ConsoleArgs;
use app\models\Room;

class GetCrossCurrencyConsoleArgsAdapter extends ConsoleArgAdapter
{
    public string $firstCurrency;
    public string $secondCurrency;


    public function __construct(ConsoleArgs $consoleArgs)
    {
        $this->firstCurrency = $consoleArgs->args[0];
        $this->secondCurrency = $consoleArgs->args[1];
    }
}