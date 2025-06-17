<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Product;
use Symfony\Component\Dotenv\Dotenv;

echo "Coucou les FT11";

$product = new Product("test", 123.34);

$dotenv = new Dotenv();
$dotenv->loadEnv(__DIR__ . '/../.env');

[
    'DB_HOST' => $host,
    'DB_PORT' => $port,
    'DB_NAME' => $dbName,
    'DB_USER' => $dbUser,
    'DB_PASSWORD' => $dbPassword,
    'DB_CHARSET' => $dbCharset
] = $_ENV;

$connection = new PDO(
    "mysql:host=$host;port=$port;dbname=$dbName;charset=$dbCharset",
    $dbUser,
    $dbPassword
);

var_dump($connection);
