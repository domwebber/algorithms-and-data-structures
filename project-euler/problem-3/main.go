// Project Euler Problem 3 - Largest Prime Factor
//
// The prime factors of 13195 are 5, 7, 13 and 29.
//
// What is the largest prime factor of 600851475143?

package main

import (
	"fmt"
	"math"
)

func solution(target int) int {
	num := target
	largestFactor := 0
	counter := 2

	for int(math.Pow(float64(counter), 2)) <= num {
		if num%counter == 0 {
			num /= counter
			continue
		}

		counter++
	}

	if num > largestFactor {
		largestFactor = num
	}

	return largestFactor
}

func main() {
	result := solution(600851475143)
	fmt.Printf("main() = %d", result)
}
