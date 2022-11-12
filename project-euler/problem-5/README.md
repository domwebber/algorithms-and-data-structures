# Project Euler Problem 5 - Smallest Multiple

> 2520 is the smallest number that can be divided by each of the numbers from 1
> to 10 without any remainder.
>
> What is the smallest positive number that is evenly divisible by all of the
> numbers from 1 to 20?

**Pseudocode:**

```txt
PRINT "Enter a list of divisors that you want to find the smallest multiple of:"
INPUT divisors

result ← False
num ← divisors[-1] + 1

WHILE result = False
    isDivisibleByAll ← True

    FOREACH divisor IN divisors
        IF (num % divisor) != 0
            isDivisibleByAll ← False
            BREAK
        ENDIF
    NEXT

    IF isDivisibleByAll
        result ← num
        CONTINUE
    ENDIF

    num ← num + 1
ENDWHILE

OUTPUT result
```
