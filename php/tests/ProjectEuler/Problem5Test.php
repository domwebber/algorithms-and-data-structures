<?php

namespace Domwebber\AlgorithmsAndDataStructures\Tests\ProjectEuler;

use PHPUnit\Framework\TestCase;
use Domwebber\AlgorithmsAndDataStructures\ProjectEuler\Problem5;

final class Problem5Test extends TestCase
{
    private Problem5 $problem;

    protected function setUp(): void
    {
        $this->problem = new Problem5();
    }

    public function testReachesAnswer(): void
    {
        $this->assertSame($this->problem->smallestMultiple(), 233168);
    }
}
