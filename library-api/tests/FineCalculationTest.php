<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class FineCalculationTest extends TestCase
{
    public function testNoFineWhenBookReturnedOnTime(): void
    {
        $this->assertEquals(0, 0 * 50);
    }
    public function testFineCalculatedWhenBookReturnedLate(): void
    {
        $this->assertEquals(300, 6 * 50);
    }
    public function testFineCalculationForDifferentOverduePeriods(): void
    {
        $this->assertEquals(50, 1 * 50);
        $this->assertEquals(150, 3 * 50);
        $this->assertEquals(350, 7 * 50);
    }
}
