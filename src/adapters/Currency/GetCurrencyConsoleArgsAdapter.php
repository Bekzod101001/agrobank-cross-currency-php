<?php

namespace app\adapters\Currency;

use app\adapters\ConsoleArgAdapter;
use app\core\ConsoleArgs;
use app\models\Room;

class GetCurrencyConsoleArgsAdapter extends ConsoleArgAdapter
{
    public string $currency;

    public function __construct(ConsoleArgs $consoleArgs)
    {
        $this->currency = $consoleArgs->args[0];
    }
}