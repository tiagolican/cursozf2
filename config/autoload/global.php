<?php

return array(
    'db' => array(
        'driver' => 'Pdo',
        'dsn' => 'mysql:dbname=db_livraria;host=localhost',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAME \'UTF-8\''
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory'
        )
    )
);
