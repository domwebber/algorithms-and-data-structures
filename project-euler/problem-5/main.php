<?php

/**
 * Project Euler Problem 5 - Smallest Multiple.
 *
 * 2520 is the smallest number that can be divided by each of the numbers from
 * 1 to 10 without any remainder.
 *
 * What is the smallest positive number that is evenly divisible by all of the
 * numbers from 1 to 20?
 *
 * NOTE: This algorithm does not complete quickly.
 */

function main(array $divisors): ?int
{
    $result = null;
    $num = $divisors[count($divisors) - 1] + 1;

    while (!$result) {
        $isDivisibleByAll = true;
        echo "Testing: {$num} \n";

        for ($i = 0; $i <= count($divisors); $i++) {
            $isDivisible = $divisors[$i] % $num === 0;

            if (!$isDivisible) {
                $isDivisibleByAll = false;
                break;
            }
        }

        if ($isDivisibleByAll) {
            $result = $i;
            continue;
        }

        $num++;
    }

    return $result;
}

$result = main(range(0, 20));
echo "main() = {$result}";
