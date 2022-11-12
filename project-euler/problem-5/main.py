""" Project Euler Problem 5 - Smallest Multiple.

2520 is the smallest number that can be divided by each of the numbers from 1
to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the
numbers from 1 to 20?
"""

from typing import Optional


def every(callable: callable, iterable) -> bool:
    for element in iterable:
        if not callable(element):
            return False
    return True


def smallestMultiple(divisors: list[int] = range(1, 20)) -> Optional[int]:
    result = None
    num = divisors[-1] + 1

    while not result:
        isDivisibleByAll = every(
            lambda divisor: (num % divisor) == 0, divisors)
        if isDivisibleByAll:
            result = num
            continue
        num += 1

    return result


if __name__ == "__main__":
    print(f"{smallestMultiple() = }")
