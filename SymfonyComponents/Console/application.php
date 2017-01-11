#!/usr/bin/env php
<?php
namespace SymfonyComponents\Console;
// application.php

require __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Console\Application;
use SymfonyComponents\Console\GenerateAdminCommand;
use SymfonyComponents\Console\CreateUserCommand;
use SymfonyComponents\Console\GreetCommand;
use SymfonyComponents\Console\Greet2Command;
use SymfonyComponents\Console\Greet3Command;

$application = new Application();

// ... register commands
$application->add(new GenerateAdminCommand());
$application->add(new CreateUserCommand());
$application->add(new GreetCommand());
$application->add(new Greet2Command());
$application->add(new Greet3Command());

$application->run();