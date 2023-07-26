<?php

use Bernardo\Doctrine\Entity\Course;
use Bernardo\Doctrine\Entity\Formation;
use Bernardo\Doctrine\Entity\Phone;
use Bernardo\Doctrine\Entity\Student;
use Bernardo\Doctrine\Helper\EntityManagerCreator;
use Bernardo\Doctrine\Entity\Mask;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$formation = new Formation($argv[1]);

$entityManager->persist($formation);
$entityManager->flush();
