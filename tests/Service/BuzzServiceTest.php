<?php

namespace App\Tests\Service;

use App\Service\BuzzService;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class BuzzServiceTest extends TestCase
{
    private BuzzService $buzzService;

    protected function setUp(): void
    {
        $this->buzzService = new BuzzService();
    }

    public static function appliesToProvider(): array
    {
        return [
            [5, true],   // Divisible by 5
            [10, true],  // Divisible by 5
            [20, true],  // Divisible by 5
            [3, false],  // Not divisible by 5
            [7, false],  // Not divisible by 5
        ];
    }

    #[DataProvider('appliesToProvider')]
    public function testAppliesTo(int $number, bool $expected): void
    {
        $this->assertSame($expected, $this->buzzService->appliesTo($number));
    }
}
