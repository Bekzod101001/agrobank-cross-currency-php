<?php

namespace app\core;

use app\exceptions\CommandNotFoundException;

class ConsoleArgs
{
    public array $allArgs = [];
    public bool $withoutArgs;

    public string $command;

    public function __construct()
    {
        $this->allArgs = $_SERVER['argv'];

        $this->command = $this->allArgs[1] ?? false;

        if(!$this->command){
            throw new CommandNotFoundException();
        }

        $this->withoutArgs = count($this->allArgs) < 1;

        $this->args = array_values(
            array_filter($this->allArgs, function($key) {
                // arg with 0 key is script name, arg with 1 key is command, so we are skipping them
                return $key > 1;
            }, ARRAY_FILTER_USE_KEY)
        );

    }
}