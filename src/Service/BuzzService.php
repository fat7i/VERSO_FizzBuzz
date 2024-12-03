<?php

namespace App\Service;

readonly class BuzzService implements RuleInterface
{
    private const DIVISOR = 5;
    private const REPLACEMENT = 'Buzz';

    public function appliesTo(int $number): bool
    {
        return $number % self::DIVISOR === 0;
    }

    public function getReplacement(): string
    {
        return self::REPLACEMENT;
    }
}
