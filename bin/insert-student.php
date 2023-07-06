<?php

use Bernardo\Doctrine\Entity\Phone;
use Bernardo\Doctrine\Entity\Student;
use Bernardo\Doctrine\Helper\EntityManagerCreator;
use Bernardo\Doctrine\Entity\Mask;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$student = new Student('Juliano Gomes');
$student->addPhone($phone1 = new Phone(Mask::maskPhoneNumber('555555545555')));
$student->addPhone($phone2 = new Phone(Mask::maskPhoneNumber('505050505555')));


$entityManager->persist($student);
$entityManager->flush();
