<?php

namespace Aula\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory
{
    public function getEntityManager(): EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../..';

        // é um array pq ele pode buscar em mais de um lugar
        $config = Setup::createAnnotationMetadataConfiguration([
            [$rootDir . '/src'],
            true
        ]);
        $connection = [
            'driver' => 'pdo_sqlite',
            'path'   => $rootDir . 'var/data/banco.sqlite'
        ];
        return EntityManager::create($connection, $config);
    }
}