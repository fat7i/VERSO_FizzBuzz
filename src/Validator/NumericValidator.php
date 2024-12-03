<?php

namespace App\Validator;

readonly class NumericValidator implements ValidatorInterface
{
    public function validate(mixed $start, mixed $end): bool
    {
        return ctype_digit((string)$start) && ctype_digit((string)$end);
    }

    public function getErrorMessage(): string
    {
        return 'Both start and end must be numeric values without any letters.';
    }
}
