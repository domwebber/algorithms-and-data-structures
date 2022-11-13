package Problem1

import (
	"testing"

	"github.com/stretchr/testify/assert"
)

func Test(t *testing.T) {
	assert.Equal(t, sumMultiplesOf3Or5(1000), 233168, "Reaches the correct answer")
}
