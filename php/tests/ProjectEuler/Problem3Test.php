<?php

namespace DomWebber\AlgorithmsAndDataStructures\Tests\ProjectEuler;

use PHPUnit\Framework\TestCase;
use DomWebber\AlgorithmsAndDataStructures\ProjectEuler\Problem3;

final class Problem3Test extends TestCase
{
    private Problem3 $problem;

    protected function setUp(): void
    {
        $this->problem = new Problem3();
    }

    public function testReachesAnswer(): void
    {
        $this->assertSame($this->problem->largestPrimeFactor(), 6857);
    }
}
