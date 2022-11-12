# Project Euler Problem 1 - Multiples of 3 or 5

> If we list all the natural numbers below 10 that are multiples of 3 or 5, we
> get 3, 5 and 9. The sum of these multiples is 23.
>
> Find the sum of all the multiples of 3 or 5 below 1000.

**Pseudocode:**

```txt
PRINT "Enter the number to calculate the sum of the multiples of 3 or 5 below:"
INPUT n

total ← 0

FOR i = 3 TO n
    IF (i % 3) = 0 OR (i % 5) = 0 THEN
        total ← total + i
    ENDIF
NEXT

OUTPUT total
```
