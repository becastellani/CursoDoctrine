<?php


use Bernardo\Doctrine\Entity\Student;
use Bernardo\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);


/** @var Student[] $studentList */
$studentList = $studentRepository->findAll();

foreach ($studentList as $student){
    echo "ID: $student->id\nNome: $student->nome\n\n";
}


$result = $student = $studentRepository->findOneBy([
    'nome' =>'Bernardo Castellani'
]);

var_dump($result);