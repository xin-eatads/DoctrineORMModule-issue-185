<?php
    //to generate db schema using doctrine;

    $config = new \Doctrine\ORM\Configuration();
    $config->setMetadataCacheImpl(new \Doctrine\Common\Cache\ArrayCache);
    $driverImpl = $config->newDefaultAnnotationDriver
    (
        array
        (
//             __DIR__."/module/GoodFruit/src/Fruit/Entity"
            __DIR__."/module/BadFruit/src/Fruit/Entity"            
        )
    );
    $config->setMetadataDriverImpl($driverImpl);

    $config->setProxyDir(__DIR__ . '/Proxies');
    $config->setProxyNamespace('Proxies');

    $connectionOptions = array
    (
        'driver' => 'pdo_mysql',
        'host'     => '127.0.0.1',
        'dbname'   => 'test',
        'user'     => 'root',
        'password' => '',
        'path' => './data/database.sql'
    );

    $em = \Doctrine\ORM\EntityManager::create($connectionOptions, $config);

    $helpers = new Symfony\Component\Console\Helper\HelperSet
    (
        array
        (
        'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
        'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
        )
    );
