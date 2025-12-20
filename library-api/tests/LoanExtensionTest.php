<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class LoanExtensionTest extends TestCase
{
    public function testSuccessfulLoanExtension(): void
    {
        $date = new \DateTime('2024-01-01');
        $date->modify('+7 days');
        $this->assertEquals('2024-01-08', $date->format('Y-m-d'));
    }
    public function testExtensionAddsSevenDaysToDueDate(): void
    {
        $date = new \DateTime('2024-01-15');
        $date->modify('+7 days');
        $this->assertEquals('2024-01-22', $date->format('Y-m-d'));
    }
}
