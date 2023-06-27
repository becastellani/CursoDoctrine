<?php

use Bernardo\Doctrine\Entity\Student;
use Bernardo\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$student = $entityManager->getPartialReference(Student::class, $argv[1]);

$entityManager->remove($student);
$entityManager->flush();


