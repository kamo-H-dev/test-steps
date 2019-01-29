<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=<YOUR DATABASE HERE>',
    'username' => '<YOUR DATABASE USERNAME HERE>',
    'password' => '<YOUR DATABASE PASSWORD HERE>',
    'charset' => 'utf8mb4',
    'attributes' => [
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));",
    ],
    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
