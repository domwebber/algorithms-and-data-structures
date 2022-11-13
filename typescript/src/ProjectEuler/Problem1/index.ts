/**
 * Project Euler Problem 1 - Multiples of 3 or 5
 *
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we
 * get 3, 5, 6 and 9. The sum of these multiples is 23.
 *
 * Find the sum of all the multiples of 3 or 5 below 1000.
 */
export default function sumMultiplesOf3Or5(n: number = 1000): number {
  const startingNumber = 3;
  return [...Array(n - startingNumber).keys()]
    .map((i) => i + startingNumber)
    .reduce((previousValue, currentNumber) => {
      return currentNumber % 3 === 0 || currentNumber % 5 === 0
        ? previousValue + currentNumber
        : previousValue;
    }, 0);
}
