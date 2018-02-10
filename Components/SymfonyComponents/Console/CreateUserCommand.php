<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 11.01.17
 * Time: 11:15
 */

namespace SymfonyComponents\Console;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

class CreateUserCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:create-users')

            // the short description shown while running "php bin/console list"
            ->setDescription('Creates new users.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp("This command allows you to create users....");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(
            [
                '<info>User Creator</info>',
                '<comment>============</>',
                '',]
        );

        //*// outputs multiple lines to the console (adding "\n" at the end of each line)
        $command = $this->getApplication()->find('app:get-admin-text');

        $arguments = array(
            'username'    => 'Fabien',
        );

        $greetInput = new ArrayInput($arguments);
        $returnCode = $command->run($greetInput, $output);
        $output->writeln($returnCode);
        //*/

        // outputs a message followed by a "\n"
        $output->writeln('<question>Whoa!</question>');

        // outputs a message without adding a "\n" at the end of the line
        $output->write('<error>You are about to </error>');
        $output->write('create a user.');

        $style = new OutputFormatterStyle('red', 'yellow', array('bold', 'blink'));
        $output->getFormatter()->setStyle('fire', $style);

        $output->writeln('<fire>foo</fire>');

        // green text
        $output->writeln('<fg=green>foo</>');

        // black text on a cyan background
        $output->writeln('<fg=black;bg=cyan>foo</>');

        // bold text on a yellow background
        $output->writeln('<bg=yellow;options=bold>foo</>');

        // bold text with underscore
        $output->writeln('<options=bold,underscore>foo</>');
    }
}