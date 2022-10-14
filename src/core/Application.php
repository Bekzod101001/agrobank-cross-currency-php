<?php

namespace app\core;

class Application
{
    public CommandRouter $commandRouter;
    public ConsoleArgs $consoleArgs;

    public static Application|null $instance = null;

    public function __construct()
    {
        $this->consoleArgs = new ConsoleArgs();
        $this->commandRouter = new CommandRouter($this->consoleArgs);
    }

    public function run(): void
    {
        echo $this->commandRouter->handle() . '\n';
    }

    public static function getInstance () : Application
    {
        if(self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}