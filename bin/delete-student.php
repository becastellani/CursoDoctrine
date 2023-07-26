<?php

use Bernardo\Doctrine\Entity\Formation;
use Bernardo\Doctrine\Entity\Student;
use Bernardo\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$formation = $entityManager->find(Formation::class, $argv[1]);

$entityManager->remove($formation);
$entityManager->flush();


