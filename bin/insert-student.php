<?php

use Bernardo\Doctrine\Entity\Phone;
use Bernardo\Doctrine\Entity\Student;
use Bernardo\Doctrine\Helper\EntityManagerCreator;
use Bernardo\Doctrine\Entity\Mask;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$student = new Student('Mario');
$student->addPhone($phone1 = new Phone(Mask::maskPhoneNumber('19999050943')));
$student->addPhone($phone2 = new Phone(Mask::maskPhoneNumber('22222222222')));


$entityManager->persist($student);
$entityManager->flush();
