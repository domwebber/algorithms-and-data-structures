package Problem5

import (
	"testing"

	"github.com/stretchr/testify/assert"
)

func Test(t *testing.T) {
	var divisors []int
	for i := 1; i <= 20; i++ {
		divisors = append(divisors, i)
	}

	assert.Equal(t, smallestMultiple(divisors), 233168, "Reaches the correct answer")
}
