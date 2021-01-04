<?php 
    $host = '127.0.0.1:8111';
    $db = 'teapp_db';
    $user = 'root';
    $pass = '';
    $charset ='utf8mb4';

    $dsn =  "mysql:host=$host;dbname=$db;charset=$charset";         //nacin na koji se konektuje - data source name
    try{
        $pdo = new PDO($dsn, $user, $pass);
        echo 'Hello database';
    } catch(PDOException $e){
        echo "<h1 class='text-danger'>No database connestion</h1>";
        throw new PDOException($e->getMessage());
    }
?>