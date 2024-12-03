<?php

namespace App\Validator;

use Symfony\Component\Console\Output\OutputInterface;

readonly class Validator
{
    public function __construct(
        private array $validators = [],
    ) {
    }

    public function validate(mixed $start, mixed $end, OutputInterface $output): bool
    {
        foreach ($this->validators as $validator) {
            if (!$validator->validate($start, $end)) {
                $output->writeln('<error>' . $validator->getErrorMessage() . '</error>');
                return false;
            }
        }
        return true;
    }
}
