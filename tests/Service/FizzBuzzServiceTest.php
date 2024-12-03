<?php

namespace App\Tests\Service;

use App\Service\FizzBuzzService;
use App\Service\FizzService;
use App\Service\BuzzService;
use PHPUnit\Framework\TestCase;

class FizzBuzzServiceTest extends TestCase
{
    private FizzBuzzService $fizzBuzzService;

    protected function setUp(): void
    {
        $this->fizzBuzzService = new FizzBuzzService([
            new FizzService(),
            new BuzzService(),
        ]);
    }

    public function testGenerateOutputForNumberDivisibleBy3And5(): void
    {
        $this->assertEquals('FizzBuzz', $this->fizzBuzzService->generateOutputForNumber(15));  // Divisible by 3 and 5
    }

    public function testGenerateOutputForNumberDivisibleBy3(): void
    {
        $this->assertEquals('Fizz', $this->fizzBuzzService->generateOutputForNumber(3));  // Divisible by 3
    }

    public function testGenerateOutputForNumberDivisibleBy5(): void
    {
        $this->assertEquals('Buzz', $this->fizzBuzzService->generateOutputForNumber(5));  // Divisible by 5
    }

    public function testGenerateOutputForNumberNotDivisibleBy3Or5(): void
    {
        $this->assertEquals(7, $this->fizzBuzzService->generateOutputForNumber(7));  // Not divisible by 3 or 5
    }

    public function testGenerateForRange(): void
    {
        $expected = [1, 2, 'Fizz', 4, 'Buzz', 'Fizz', 7, 8, 'Fizz', 'Buzz', 11, 'Fizz', 13, 14, 'FizzBuzz'];
        $this->assertEquals($expected, $this->fizzBuzzService->generate(1, 15));  // Range from 1 to 15
    }
}
