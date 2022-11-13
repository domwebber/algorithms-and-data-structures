"use strict";
/**
 * Project Euler Problem 3 - Largest Prime Factor.
 *
 * The prime factors of 13195 are 5, 7, 13 and 29.
 *
 * What is the largest prime factor of 600851475143?
 */
function largestPrimeFactor(target = 600851475143) {
    let num = target;
    let largestFactor = 0;
    let counter = 2;
    while (counter ** 2 <= num) {
        if (num % counter === 0) {
            num = num / counter;
            continue;
        }
        counter++;
    }
    if (num > largestFactor) {
        largestFactor = num;
    }
    return largestFactor;
}
console.log(`largestPrimeFactor() = ${largestPrimeFactor()}`);
