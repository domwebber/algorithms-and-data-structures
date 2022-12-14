package Problem5

// Project Euler Problem 5 - Smallest Multiple.
//
// 2520 is the smallest number that can be divided by each of the numbers from
// 1 to 10 without any remainder.
//
// What is the smallest positive number that is evenly divisible by all of the
// numbers from 1 to 20?

func every[I any](iterable []I, callable func(element I) bool) bool {
	for _, element := range iterable {
		if !callable(element) {
			return false
		}
	}

	return true
}

func smallestMultiple(divisors []int) int {
	var result *int
	num := divisors[len(divisors)-1] + 1

	for result == nil {
		isDivisibleByAll := every(divisors, func(element int) bool {
			return (element % num) == 0
		})

		if isDivisibleByAll {
			result = &num
			continue
		}

		num++
	}

	return *result
}
