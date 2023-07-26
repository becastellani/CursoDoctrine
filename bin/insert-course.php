<?php

use Bernardo\Doctrine\Entity\Course;
use Bernardo\Doctrine\Entity\Phone;
use Bernardo\Doctrine\Entity\Student;
use Bernardo\Doctrine\Helper\EntityManagerCreator;
use Bernardo\Doctrine\Entity\Mask;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$course = new Course($argv[1]);

$entityManager->persist($course);
$entityManager->flush();
