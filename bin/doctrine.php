<?php


use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;


require_once './vendor/autoload.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManager = Bernardo\Doctrine\Helper\EntityManagerCreator::createEntityManager();

ConsoleRunner::run(
    new SingleManagerProvider($entityManager),
);