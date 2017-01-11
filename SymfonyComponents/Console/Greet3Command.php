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
use Symfony\Component\Console\Style\SymfonyStyle;

class Greet3Command extends Command
{
    // ...

    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:greet3')

            // the short description shown while running "php bin/console list"
            ->setDescription('Greet3')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp("This command allows you to Greet3");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        //*

        $io->title('Lorem Ipsum Dolor Sit Amet');

        $io->section('Use simple strings for short messages');

        $io->text('Lorem ipsum dolor sit amet');

        $io->section('Consider using arrays when displaying long messages');

        $io->text(array(
            'Lorem ipsum dolor sit amet',
            'Consectetur adipiscing elit',
            'Aenean sit amet arcu vitae sem faucibus porta',
        ));

        $io->section('listing');

        $io->listing(array(
            'Element #1 Lorem ipsum dolor sit amet',
            'Element #2 Lorem ipsum dolor sit amet',
            'Element #3 Lorem ipsum dolor sit amet',
        ));

        $io->section('table');

        $io->table(
            array('Header 1', 'Header 2'),
            array(
                array('Cell 1-1', 'Cell 1-2'),
                array('Cell 2-1', 'Cell 2-2'),
                array('Cell 3-1', 'Cell 3-2'),
            )
        );

        // outputs a single blank line
        $io->newLine();

        // outputs three consecutive blank lines
        $io->newLine(2);

        // use simple strings for short notes
        $io->note('Lorem ipsum dolor sit amet');

        // ...

        // consider using arrays when displaying long notes
        $io->note(array(
            'Lorem ipsum dolor sit amet',
            'Consectetur adipiscing elit',
            'Aenean sit amet arcu vitae sem faucibus porta',
        ));

        // displays a progress bar of unknown length
        //$io->progressStart();

        // displays a 100-step length progress bar
        $io->progressStart(100);

        // advances the progress bar 1 step
        $io->progressAdvance();

        // advances the progress bar 10 steps
        $io->progressAdvance(10);

        $io->progressFinish();

        //*/

        //* User Input Methods

        $io->ask('What is your name?');

        $io->ask('Where are you from?', 'United States');

        $io->ask(
            'Number of workers to start',
            1,
            function ($number) {
                if (!is_integer($number)) {
                    throw new \RuntimeException('You must type an integer.');
                }

                return $number;
            }
        );

        $io->askHidden('What is your password?');

        // validates the given answer
        $io->askHidden('What is your password?', function ($password) {
            if (empty($password)) {
                throw new \RuntimeException('Password cannot be empty.');
            }

            return $password;
        });

        $io->confirm('Restart the web server?');

        $io->confirm('Restart the web server?', false);

        $io->choice('Select the queue to analyze', array('queue1', 'queue2', 'queue3'));

        $io->choice('Select the queue to analyze', array('queue1', 'queue2', 'queue3'), 'queue1');
        //*/

        //* ...
        // use simple strings for short success messages
        $io->success('Lorem ipsum dolor sit amet');

        // consider using arrays when displaying long success messages
        $io->success(array(
            'Lorem ipsum dolor sit amet',
            'Consectetur adipiscing elit',
        ));

        // use simple strings for short warning messages
        $io->warning('Lorem ipsum dolor sit amet');

        // ...

        // consider using arrays when displaying long warning messages
        $io->warning(array(
            'Lorem ipsum dolor sit amet',
            'Consectetur adipiscing elit',
        ));

        // use simple strings for short error messages
        $io->error('Lorem ipsum dolor sit amet');

        // ...

        // consider using arrays when displaying long error messages
        $io->error(array(
            'Lorem ipsum dolor sit amet',
            'Consectetur adipiscing elit',
        ));

        //*/
    }
}