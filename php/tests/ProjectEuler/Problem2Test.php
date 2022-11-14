<?php

namespace DomWebber\AlgorithmsAndDataStructures\Tests\ProjectEuler;

require __DIR__ . "/../../vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DomWebber\AlgorithmsAndDataStructures\ProjectEuler\Problem2;

final class Problem2Test extends TestCase
{
    private Problem2 $problem;

    protected function setUp(): void
    {
        $this->problem = new Problem2();
    }

    public function testReachesAnswer(): void
    {
        $this->assertSame($this->problem->evenFibonacciNumbers(), 4613732);
    }
}
