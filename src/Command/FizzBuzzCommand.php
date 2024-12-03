<?php

namespace App\Command;

use App\Service\FizzBuzzService;
use App\Validator\Validator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FizzBuzzCommand extends Command
{
    private FizzBuzzService $fizzBuzzService;
    private Validator $validator;

    public function __construct(FizzBuzzService $fizzBuzzService, Validator $validator)
    {
        parent::__construct();
        $this->fizzBuzzService = $fizzBuzzService;
        $this->validator = $validator;
    }

    protected function configure(): void
    {
        $this
            ->setName('app:fizzbuzz')
            ->setDescription('Generate FizzBuzz output for a given range.')
            ->addArgument('start', InputArgument::REQUIRED, 'The start number of the range.')
            ->addArgument('end', InputArgument::REQUIRED, 'The end number of the range.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $start = $input->getArgument('start');
        $end = $input->getArgument('end');

        if (!$this->validator->validate($start, $end, $output)) {
            return Command::FAILURE;
        }

        $results = $this->fizzBuzzService->generate($start, $end);

        foreach ($results as $result) {
            $output->writeln($result);
        }

        return Command::SUCCESS;
    }
}
