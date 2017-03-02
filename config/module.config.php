<?php
$path=  realpath((__DIR__).'/../').'/src/';

return [
        'doctrine' => [
            'connection' => [
                'orm_default' => [
                    'driverClass' => \Doctrine\DBAL\Driver\PDOMySql\Driver::class,
                    'params' => [
                        'charset' => 'utf8',
                    ],
                ],
            ],
            'driver' => [
                'Doctrine\Driver\Core\Service\Firebase' => [
                    'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                    'cache' => 'array',
                    'paths' => [
                        0 => $path.'/Entity',
                    ],
                ],
                'orm_default' => [
                    'drivers' => [
                    'Adteam\\Core\\Service\\Firebase' => 'Doctrine\Driver\Core\Service\Firebase',
                    ],
                ],
            ],
        ]      
];
