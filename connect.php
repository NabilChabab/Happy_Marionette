<?php
require 'vendor/autoload.php';
$dotenv=\Dotenv\Dotenv::createImmutable(__DIR__ . '/');
    $dotenv->load();


    $servername = $_ENV['DB_SERVERNAME'];
    $username = $_ENV['DB_USERNAME'];
    $password = $_ENV['DB_PASSWORD'];
    $dbname = $_ENV['DB_NAME'];
    $connect = mysqli_connect($servername,$username,$password,$dbname);


    // if($connect){
    //     echo "success";
    // }
    // else{
    //     echo "error";
    // }

    
?>