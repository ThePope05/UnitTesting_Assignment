<?php

namespace TDD;

class sumClass
{
    public $sum;

    public static function sum(array $numbers)
    {
        $sum = array_sum($numbers);
        return $sum;
    }
}
