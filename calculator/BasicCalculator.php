<?php
namespace Calculator;

class BasicCalculator
{
    public static function add(float $x, float $y) {
        return $x + $y;
    }

    public static function subtract(float $x, float $y) {
        return $x - $y;
    }

    public static function multiply(float $x, float $y) {
        (float) $test = 1;
        return $x * $y;
    }

    public static function divide(float $x, float $y) {
        if ($y == 0) {
            return 'Cannot divide by 0';
        }
        return $x / $y;
    }

    public function testUnusedFunction()
    {
        $testVariable = 0;
    }

    public function testUnusedSecondFunction(int $x)
    {
        if ($x) {
            return 0 / $x;
        } else if ($x !== 2) {
            return $x * $x;
        }

        return $x;
    }

    public function moreTest()
    {
        // function number test
    }
}
