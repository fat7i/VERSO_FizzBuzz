<?php

namespace App\Validator;

interface ValidatorInterface
{
    public function validate(mixed $start, mixed $end): bool;

    public function getErrorMessage(): string;
}