<?php

use Aula\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . 'vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

var_dump($entityManager->getConnection());