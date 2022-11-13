/**
 * Project Euler Problem 2 - Even Fibonacci Numbers
 *
 * Each new term in the Fibonacci sequence is generated by adding the previous
 * two terms. By starting with 1 and 2, the first 10 terms will be:
 *
 * 1, 2, 3, 5, 8, 13, 21, 34, 55, 89
 *
 * By considering the terms in the Fibonacci sequence whose values do not
 * exceed four million, find the sum of the even-valued terms.
 */

function fibonacci(num1: number, num2: number): number {
  return num1 + num2;
}

export default function evenFibonacciNumbers(
  maximumTerm: number = 4000000
): number {
  let previousTerm1 = 1;
  let previousTerm2 = 1;
  let total = 0;

  while (previousTerm2 < maximumTerm) {
    const fibonacciPoint = fibonacci(previousTerm1, previousTerm2);

    previousTerm1 = previousTerm2;
    previousTerm2 = fibonacciPoint;

    if (fibonacciPoint % 2 === 0) {
      total += fibonacciPoint;
    }
  }

  return total;
}
