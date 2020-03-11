<?php

use MongoDB\Client as MongoDbClient;

require __DIR__ . '/../vendor/autoload.php';

$host = getenv('MONGO_HOST');
$port = (int)getenv('MONGO_PORT');
$user = getenv('MONGO_USERNAME');
$pass = getenv('MONGO_PASSWORD');

$uri  = sprintf(
    'mongodb://%s:%d/',
    $host,
    $port,
);

echo 'Connecting to mongodb', PHP_EOL;
try {
    $client = new MongoDbClient($uri, [
        'username' => $user,
        'password' => $pass,
    ]);

    echo 'Connected to mongodb', PHP_EOL;

    return $client;
} catch (Exception $exception) {
    echo 'Could not connect to mongodb: [\'exception\' => $exception]', PHP_EOL;
}
