<?php 
$host = "localhost";
$port = 3306;
$db = "java";
$username = "root";
$pwd = "";

try {
    $con = new PDO("mysql:host=$host:$port; dbname=$db", $username,$pwd);
    $con = null;
    echo "Suskes Terkoneksi";
} catch (PDOException $exception) {
    echo "gagal Terkoneksi" . $exception->getMessage().PHP_EOL;
}
?>