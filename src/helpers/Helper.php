<?php

namespace app\helpers;

class Helper
{
    public static function emailIsValid(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function findItemFromArrayByKey(array $array, string $keyForSearch, mixed $value)
    {
        foreach ($array as $item) {
            if ($item->{$keyForSearch} === $value) return $item;
        }
        return null;
    }
}