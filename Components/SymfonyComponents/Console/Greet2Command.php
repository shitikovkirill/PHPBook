<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 11.01.17
 * Time: 12:59
 */

namespace SymfonyComponents\Console;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Greet2Command extends Command
{
    // ...

    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:greet2')

            // the short description shown while running "php bin/console list"
            ->setDescription('Greet2')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp("This command allows you to Greet2");

        $this
            // ...
            ->addArgument(
                'names',
                InputArgument::IS_ARRAY,
                'Who do you want to greet (separate multiple names with a space)?'
            );

        $this
            // ...
            ->addOption(
                'iterations',
                null,
                InputOption::VALUE_REQUIRED,
                'How many times should the message be printed?',
                1
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text = 'Hi ';

        $names = $input->getArgument('names');
        if (count($names) > 0) {
            $text .= ' '.implode(', ', $names);
        }

        $text = $text.'!';

        for ($i = 0; $i < $input->getOption('iterations'); $i++) {
            $output->writeln($text);
        }
    }
}