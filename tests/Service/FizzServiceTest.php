<?php

namespace App\Tests\Service;

use App\Service\FizzService;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class FizzServiceTest extends TestCase
{
    private FizzService $fizzService;

    protected function setUp(): void
    {
        $this->fizzService = new FizzService();
    }

    public static function appliesToProvider(): array
    {
        return [
            [3, true],   // Divisible by 3
            [6, true],   // Divisible by 3
            [9, true],   // Divisible by 3
            [7, false],  // Not divisible by 3
            [10, false], // Not divisible by 3
        ];
    }

    #[DataProvider('appliesToProvider')]
    public function testAppliesTo(int $number, bool $expected): void
    {
        $this->assertSame($expected, $this->fizzService->appliesTo($number));
    }
}
