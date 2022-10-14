<?php

namespace app\exceptions;

class CurrencyNotFoundException extends \Exception
{
    protected $code = 404;
    protected $message = "Currency not found";
}