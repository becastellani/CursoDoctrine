<?php


use Bernardo\Doctrine\Entity\Student;
use Bernardo\Doctrine\Helper\EntityManagerCreator;
use Bernardo\Doctrine\Entity\Phone;


require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);

/** @var Student[] $studentList */
$studentList = $studentRepository->findAll();

foreach ($studentList as $student) {
    echo "ID: $student->id\nNome: $student->nome\n\n";
    echo "Telefones: \n";

    $phoneNumbers = [];
    foreach ($student->phones() as $phone) {
        $phoneNumbers[] = $phone->number;
    }
    
    echo implode(', ', $phoneNumbers) . PHP_EOL . PHP_EOL;
}

echo $studentRepository->count([]) . PHP_EOL;
