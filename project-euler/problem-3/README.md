# Project Euler Problem 3 - Largest Prime Factor

> The prime factors of 13195 are 5, 7, 13 and 29.
>
> What is the largest prime factor of 600851475143?

**Pseudocode:**

```txt
PRINT "Enter the number you want to find the largest prime factor of:"
INPUT target

num ← target
largestFactor ← 0
counter ← 2

WHILE (counter ** 2) <= num
    IF (num % counter) = 0
        num ← num / counter
        CONTINUE
    ENDIF

    counter ← counter + 1
ENDWHILE

IF num > largestFactor
    largestFactor ← num
ENDIF

OUTPUT largestFactor
```
