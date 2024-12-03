<?php

namespace App\Service;

readonly class FizzBuzzService
{
    public function __construct(
        private array $rules,
    ) {
    }

    public function generate(int $start, int $end): array
    {
        $results = [];

        for ($i = $start; $i <= $end; $i++) {
            $results[] = $this->generateOutputForNumber($i); // Use the helper method
        }

        return $results;
    }

    public function generateOutputForNumber(int $number): mixed
    {
        $output = '';

        foreach ($this->rules as $rule) {
            if ($rule->appliesTo($number)) {
                $output .= $rule->getReplacement();
            }
        }

        return $output === '' ? $number : $output;
    }
}
