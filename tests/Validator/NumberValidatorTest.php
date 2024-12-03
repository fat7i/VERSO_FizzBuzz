<?php

namespace App\Tests\Validator;

use App\Validator\NumberValidator;
use PHPUnit\Framework\TestCase;

class NumberValidatorTest extends TestCase
{
    private NumberValidator $validator;

    protected function setUp(): void
    {
        $this->validator = new NumberValidator();
    }

    public function testValidPositiveNumbers(): void
    {
        $start = 1;
        $end = 100;
        $this->assertTrue($this->validator->validate($start, $end));
    }

    public function testInvalidNegativeStart(): void
    {
        $start = -1;
        $end = 100;
        $this->assertFalse($this->validator->validate($start, $end));
    }

    public function testInvalidNegativeEnd(): void
    {
        $start = 1;
        $end = -100;
        $this->assertFalse($this->validator->validate($start, $end));
    }

    public function testZeroInput(): void
    {
        $start = 0;
        $end = 100;
        $this->assertFalse($this->validator->validate($start, $end));
    }

    public function testErrorMessage(): void
    {
        $this->assertEquals('Both start and end must be positive integers.', $this->validator->getErrorMessage());
    }
}
