<?php

use Aula\Doctrine\Helper\EntityManagerFactory;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once 'vendor/autoload.php';
include '/usr/share/php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);