<?php
namespace Calculator;

class BasicCalculator
{
    public static function add(float $x, float $y) {
        $unused = 1;
        return $x + $y;
    }

    public static function subtract(float $x, float $y) {
        $undefined;
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

    public function testFunction(): int
    {
        return 1;
    }
}
