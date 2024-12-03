<?php

namespace App\Service;

readonly class FizzService implements RuleInterface
{
    private const DIVISOR = 3;
    private const REPLACEMENT = 'Fizz';

    public function appliesTo(int $number): bool
    {
        return $number % self::DIVISOR === 0;
    }

    public function getReplacement(): string
    {
        return self::REPLACEMENT;
    }
}
