<?php
return [
    'queue' => [
        'class' => 'storage\\RabbitQueue',
        'host'  => 'rabbitmq',
        'port'  => 5672,
        'user'  => 'guest',
        'pass'  => 'guest',
    ],
];