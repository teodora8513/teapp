<?php 
    /*Development Connection

    //Localhost connection
    $host = '127.0.0.1:8111';
    $db = 'teapp_db';
    $user = 'root';
    $pass = '';
    $charset ='utf8mb4';
    */
    //Remote database connection
    $host = 'remotemysql.com';
    $db = 'PDjfc3dGVf';
    $user = 'PDjfc3dGVf';
    $pass = 'hP5RHxmSyY';
    $charset ='utf8mb4';

    $dsn =  "mysql:host=$host;dbname=$db;charset=$charset";         //nacin na koji se konektuje - data source name
    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //Da vidimo kada ima greske

        //echo 'Hello database';
    } catch(PDOException $e){
        echo "<h1 class='text-danger'>No database connestion</h1>";
        throw new PDOException($e->getMessage());
    }

    //Referenciranje crud.php
    require_once 'crud.php';
    $crud = new crud($pdo);
?>