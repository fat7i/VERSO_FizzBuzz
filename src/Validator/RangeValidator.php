<?php

namespace App\Validator;

readonly class RangeValidator implements ValidatorInterface
{
    public function validate(mixed $start, mixed $end): bool
    {
        return $start <= $end;
    }

    public function getErrorMessage(): string
    {
        return 'The start value must be less than or equal to the end value.';
    }
}
