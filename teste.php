<?php

require_once 'vendor/autoload.php';

$entityManager = \Bernardo\Doctrine\Helper\EntityManagerCreator::createEntityManager();
var_dump($entityManager);