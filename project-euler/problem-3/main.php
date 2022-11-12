<?php

/**
 * Project Euler Problem 3 - Largest Prime Factor.
 *
 * The prime factors of 13195 are 5, 7, 13 and 29.
 *
 * What is the largest prime factor of 600851475143?
 */

function largestPrimeFactor(int $target = 600851475143): int
{
    $num = $target;
    $largestFactor = 0;
    $counter = 2;

    while ($counter ** 2 <= $num) {
        if ($num % $counter === 0) {
            $num /= $counter;
            continue;
        }

        $counter++;
    }

    if ($num > $largestFactor) {
        $largestFactor = $num;
    }

    return $largestFactor;
}

$result = largestPrimeFactor();
echo "largestPrimeFactor() = {$result}";
