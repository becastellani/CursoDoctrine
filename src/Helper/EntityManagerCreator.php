<?php

namespace Bernardo\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\Tools\Setup;

class EntityManagerCreator
{
    public static function createEntityManager() : EntityManager
    {

        $config = ORMSetup::createAttributeMetadataConfiguration(
            [__DIR__."/.."],
            true
);



        $conn =[
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/../../db.sqlite',
        ];


        return EntityManager::create($conn, $config);
    }
}