<?php

function getConnection(): PDO
{
    $host = "localhost";
    $port = 3306;
    $database = "library";
    $username = "root";
    $password = "";

    return new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
}