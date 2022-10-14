<?php

namespace app\models;

use app\core\Model;

class Currency extends Model
{

    public string $name;
    public int|float $value;
}