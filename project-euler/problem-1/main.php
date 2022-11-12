<?php

/**
 * Project Euler Problem 1 - Multiples of 3 or 5.
 *
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we
 * get 3, 5 and 9. The sum of these multiples is 23.
 *
 * Find the sums of all the multiples of 3 or 5 below 1000.
 */

function multiplesOf3Or5(int $n): int
{
    $total = 0;

    for ($i = 1; $i < $n; $i++) {
        if ($i % 3 === 0 || $i % 5 === 0) {
            $total += $i;
        }
    }

    return $total;
}

$result = multiplesOf3Or5(1000);
echo "multiplesOf3Or5(1000) = {$result}";
