<?php

namespace App\Validator;

readonly class NumberValidator implements ValidatorInterface
{
    public function validate(mixed $start, mixed $end): bool
    {
        return $start > 0 && $end > 0;
    }

    public function getErrorMessage(): string
    {
        return 'Both start and end must be positive integers.';
    }
}
