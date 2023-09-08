<?php

const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';

class Calculator
{
    function calculate($firstOperand, $secondOperand, $operator)
    {
        switch ($operator) {
            case ADDITION:
                return $firstOperand + $secondOperand;
            case SUBTRACTION:
                return $firstOperand - $secondOperand;
            case MULTIPLICATION:
                return $firstOperand * $secondOperand;
            case DIVISION:
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    throw new Exception("Can not divide by 0");
                }
            default:
                throw new Exception("Unsupported operation");
        }
    }
}