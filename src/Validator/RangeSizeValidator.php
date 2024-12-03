<?php

namespace App\Validator;

readonly class RangeSizeValidator implements ValidatorInterface
{
    private int $maxRange;

    public function __construct(int $maxRange = 1000)
    {
        $this->maxRange = $maxRange;
    }

    public function validate(mixed $start, mixed $end): bool
    {
        return ($end - $start + 1) <= $this->maxRange;
    }

    public function getErrorMessage(): string
    {
        return 'The range size is too large. Please provide a smaller range.';
    }
}
