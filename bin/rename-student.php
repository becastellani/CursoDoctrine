<?php


use Bernardo\Doctrine\Entity\Student;
use Bernardo\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);


$student = $studentRepository->find(Student::class, $argv[1]);
$student->nome = $argv[2];

$entityManager->persist($student);
$entityManager->flush();
