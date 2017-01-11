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
use Symfony\Component\Console\Output\OutputInterface;

class GreetCommand extends Command
{
    // ...

    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:greet')

            // the short description shown while running "php bin/console list"
            ->setDescription('Greet')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp("This command allows you to Greet");

        $this
            // ...
            ->addArgument('name', InputArgument::REQUIRED, 'Who do you want to greet?')
            ->addArgument('last_name', InputArgument::OPTIONAL, 'Your last name?');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text = 'Hi '.$input->getArgument('name');

        $lastName = $input->getArgument('last_name');
        if ($lastName) {
            $text .= ' '.$lastName;
        }

        $output->writeln($text.'!');
    }
}