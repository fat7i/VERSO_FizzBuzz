<?php

namespace App\Tests\Validator;

use App\Validator\RangeSizeValidator;
use PHPUnit\Framework\TestCase;

class RangeSizeValidatorTest extends TestCase
{
    private RangeSizeValidator $validator;

    protected function setUp(): void
    {
        $this->validator = new RangeSizeValidator(1000);  // Default max range size is 1000
    }

    public function testRangeSizeWithinLimit(): void
    {
        $start = 1;
        $end = 100;
        $this->assertTrue($this->validator->validate($start, $end));
    }

    public function testRangeSizeExceedsLimit(): void
    {
        $start = 1;
        $end = 2001;  // Exceeds the default limit of 1000
        $this->assertFalse($this->validator->validate($start, $end));
    }

    public function testErrorMessage(): void
    {
        $this->assertEquals('The range size is too large. Please provide a smaller range.', $this->validator->getErrorMessage());
    }
}
