// Project Euler Problem 1 - Multiples of 3 or 5
// If we list all the natural numbers below 10 that are multiples of 3 or 5, we
// get 3, 5, 6 and 9. The sum of these multipliers is 23.
//
// Find the sum of all the multiples of 3 or 5 below 1000

package main

import "fmt"

func solution(n int) int {
	total := 0

	for i := 1; i < n; i++ {
		if i%3 == 0 || i%5 == 0 {
			total += i
		}
	}

	return total
}

func main() {
	result := solution(1000)
	fmt.Printf("main(1000) = %d", result)
}
