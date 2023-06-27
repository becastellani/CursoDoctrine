<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

// replace with path to your own project bootstrap file
require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = \Bernardo\Doctrine\Helper\EntityManagerCreator::createEntityManager();

ConsoleRunner::run(
    new SingleManagerProvider($entityManager)
);