package Problem3

import (
	"testing"

	"github.com/stretchr/testify/assert"
)

func Test(t *testing.T) {
	assert.Equal(t, largestPrimeFactor(600851475143), 6857, "Reaches the correct answer")
}
