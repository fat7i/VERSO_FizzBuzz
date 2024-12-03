<?php

namespace App\Tests\Validator;

use App\Validator\NumericValidator;
use PHPUnit\Framework\TestCase;

class NumericValidatorTest extends TestCase
{
    private NumericValidator $validator;

    protected function setUp(): void
    {
        $this->validator = new NumericValidator();
    }

    public function testValidNumericInputs(): void
    {
        $start = '1';
        $end = '100';
        $this->assertTrue($this->validator->validate($start, $end));
    }

    public function testInvalidNumericInputsWithLetters(): void
    {
        $start = '1';
        $end = '10w';  // Invalid input containing letters
        $this->assertFalse($this->validator->validate($start, $end));
    }

    public function testInvalidNumericInputsWithSpecialCharacters(): void
    {
        $start = '1';
        $end = '10$';  // Invalid input containing special characters
        $this->assertFalse($this->validator->validate($start, $end));
    }

    public function testValidZeroInput(): void
    {
        $start = '0';
        $end = '100';
        $this->assertTrue($this->validator->validate($start, $end));
    }

    public function testErrorMessage(): void
    {
        $this->assertEquals('Both start and end must be numeric values without any letters.', $this->validator->getErrorMessage());
    }
}
