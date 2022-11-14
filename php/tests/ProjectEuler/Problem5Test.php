<?php

namespace DomWebber\AlgorithmsAndDataStructures\Tests\ProjectEuler;

require __DIR__ . "/../../vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DomWebber\AlgorithmsAndDataStructures\ProjectEuler\Problem5;

final class Problem5Test extends TestCase
{
    private Problem5 $problem;

    protected function setUp(): void
    {
        $this->markTestSkipped("no way of currently testing this");
        $this->problem = new Problem5();
    }

    public function testReachesAnswer(): void
    {
        $this->assertSame($this->problem->smallestMultiple(), 233168);
    }
}
