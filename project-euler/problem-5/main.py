""" Project Euler Problem 5 - Smallest Multiple.

2520 is the smallest number that can be divided by each of the numbers from 1
to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the
numbers from 1 to 20?
"""

from typing import Optional


def all(callable: callable, iterable) -> bool:
    for element in iterable:
        if not callable(element):
            return False
    return False


def main(divisors: list[int] = range(1, 20)) -> Optional[int]:
    result = None
    num = divisors[-1] + 1

    while not result:
        print(num)
        isDivisibleByAll = all(lambda divisor: num % divisor == 0, divisors)
        if isDivisibleByAll:
            result = num
            continue
        num += 1


if __name__ == "__main__":
    print(f"{main() = }")
