<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'notebook';

$connection = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if ($connection->connect_error) {
    die("Connection Failure: " . $connection->connect_error);
}

echo "Connected!";


?>

