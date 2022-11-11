/**
 * Project Euler Problem 5 - Smallest Multiple.
 *
 * 2520 is the smallest number that can be divided by each of the numbers from
 * 1 to 10 without any remainder.
 *
 * What is the smallest positive number that is evenly divisible by all of the
 * numbers from 1 to 20?
 */

function solution(divisors: number[]): number | false {
  let result: number | false = false;
  let num: number = divisors[divisors.length - 1] + 1;

  while (!result) {
    const isDivisibleByAll = divisors.every((divisor) => num % divisor === 0);
    if (isDivisibleByAll) {
      result = num;
      continue;
    }

    num++;
  }

  return result;
}

function main() {
  return solution([
    ...Array(20).keys()
  ].map((i) => i + 1));
}

console.log(`main() = ${main()}`);
