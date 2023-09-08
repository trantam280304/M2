<?php

namespace src;

class FizzBuzz
{
    static function printFizzBuzz(int $number): string
    {

        $isFizz = $number % 3 == 0;
        $isBuzz = $number % 5 == 0;

        if ($isFizz && $isBuzz) {
            return "FizzBuzz";
        } elseif ($isFizz) {
            return "Fizz";
        } elseif ($isBuzz) {
            return "Buzz";
        } else {
            return $number . "";
        }
    }
}