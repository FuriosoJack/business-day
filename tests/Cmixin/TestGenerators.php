<?php

namespace Tests\Cmixin;

class TestGenerators
{
    public function run($carbon)
    {
        $carbon::addHolidays('test', call_user_func(function () {
            for ($i = 1; $i < 4; $i++) {
                $closure = function ($year) use ($i) {
                    $c = $year % 10;

                    return "0$c/0$i";
                };

                yield $closure;
            }
        }));
        $carbon::setHolidays('test', call_user_func(function () {
            for ($i = 2; $i < 4; $i++) {
                $closure = function ($year) use ($i) {
                    $c = $year % 10;

                    return "0$c/0$i";
                };

                yield $closure;
            }
        }));
        $carbon::addHolidays('test', call_user_func(function () {
            for ($i = 6; $i < 10; $i++) {
                $closure = function ($year) use ($i) {
                    $c = $year % 10;

                    return "0$c/0$i";
                };

                yield $closure;
            }
        }));
    }
}
