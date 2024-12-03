<?php

namespace App\Service;

interface RuleInterface
{
    public function appliesTo(int $number): bool;

    public function getReplacement(): string;
}
