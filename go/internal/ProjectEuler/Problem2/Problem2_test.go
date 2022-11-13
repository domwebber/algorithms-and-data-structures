package Problem2

import (
	"testing"

	"github.com/stretchr/testify/assert"
)

func Test(t *testing.T) {
	assert.Equal(t, evenFibonacciNumbers(4000000), 4613732, "Reaches the correct answer")
}
