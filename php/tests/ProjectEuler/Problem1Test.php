<?php

namespace DomWebber\AlgorithmsAndDataStructures\Tests\ProjectEuler;

require __DIR__ . "/../../vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DomWebber\AlgorithmsAndDataStructures\ProjectEuler\Problem1;

final class Problem1Test extends TestCase
{
    private Problem1 $problem;

    protected function setUp(): void
    {
        $this->problem = new Problem1();
    }

    public function testReachesAnswer(): void
    {
        $this->assertSame($this->problem->sumMultiplesOf3Or5(), 233168);
    }
}
