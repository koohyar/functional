<?php namespace Tarsana\Functional;
/**
 * This file contains some useful Math functions.
 */

/**
 * Computes `$x + $y`.
 * ```php
 * $plusTwo = plus(2);
 * $plusTwo(5); // 7
 * ```
 *
 * @signature Number -> Number -> Number
 * @param  int|float $x
 * @param  int|float $y
 * @return int|float
 */
function plus() {
    $plus = curry(function($x, $y){
        return $x + $y;
    });
    return apply($plus, func_get_args());
}

/**
 * Computues `$x - $y`.
 * ```php
 * minus(7, 2); // 5
 * ```
 *
 * @signature Number -> Number -> Number
 * @param  int|float $x
 * @param  int|float $y
 * @return int|float
 */
function minus() {
    $minus = curry(function($x, $y){
        return $x - $y;
    });
    return apply($minus, func_get_args());
}

/**
 * Computes `- $x`.
 * ```php
 * negate(5); // -5
 * negate(-7); // 7
 * ```
 *
 * @signature Number -> Number
 * @param  int|float $x
 * @return int|float
 */
function negate($x) {
    return -$x;
}

/**
 * Computes `$x * $y`.
 * ```php
 * $double = multiply(2);
 * $double(5); // 10
 * ```
 *
 * @signature Number -> Number -> Number
 * @param  int|float $x
 * @param  int|float $y
 * @return int|float
 */
function multiply() {
    $multiply = curry(function($x, $y){
        return $y * $x;
    });
    return apply($multiply, func_get_args());
}

/**
 * Computes `$x / $y`.
 * ```php
 * divide(10, 2); // 5
 * ```
 *
 * @signature Number -> Number -> Number
 * @param  int|float $x
 * @param  int|float $y
 * @return int|float
 */
function divide() {
    $divide = curry(function($x, $y){
        return $x / $y;
    });
    return apply($divide, func_get_args());
}

/**
 * Computes `$x % $y`.
 * ```php
 * modulo(10, 3); // 1
 * ```
 *
 * @signature Number -> Number -> Number
 * @param  int|float $x
 * @param  int|float $y
 * @return int|float
 */
function modulo() {
    $modulo = curry(function($x, $y){
        return $x % $y;
    });
    return apply($modulo, func_get_args());
}

/**
 * Computes the sum of an array of numbers.
 * ```php
 * sum([1, 2, 3, 4]) // 10
 * sum([]) // 0
 * ```
 *
 * @signature [Number] -> Number
 * @param  array $numbers
 * @return int|float
 */
function sum($numbers) {
    return reduce('Tarsana\\Functional\\plus', 0, $numbers);
}

/**
 * Computes the product of an array of numbers.
 * ```php
 * product([1, 2, 3, 4]) // 24
 * product([]) // 1
 * ```
 *
 * @signature [Number] -> Number
 * @param  array $numbers
 * @return int|float
 */
function product($numbers) {
    return reduce('Tarsana\\Functional\\multiply', 1, $numbers);
}
