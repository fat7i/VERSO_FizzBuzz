<?php

namespace App\Tests\Validator;

use App\Validator\RangeValidator;
use PHPUnit\Framework\TestCase;

class RangeValidatorTest extends TestCase
{
    private RangeValidator $validator;

    protected function setUp(): void
    {
        $this->validator = new RangeValidator();
    }

    public function testStartLessThanEnd(): void
    {
        $start = 1;
        $end = 100;
        $this->assertTrue($this->validator->validate($start, $end));
    }

    public function testStartEqualToEnd(): void
    {
        $start = 100;
        $end = 100;
        $this->assertTrue($this->validator->validate($start, $end));
    }

    public function testStartGreaterThanEnd(): void
    {
        $start = 101;
        $end = 100;
        $this->assertFalse($this->validator->validate($start, $end));
    }

    public function testErrorMessage(): void
    {
        $this->assertEquals('The start value must be less than or equal to the end value.', $this->validator->getErrorMessage());
    }
}
