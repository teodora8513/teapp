<?php 
    //Ukljucuje session_start()
    include_once 'includes/header.php';
    //Unistavamo sesiju. Zatim header() funkcija prebacuje na home starnicu
    session_destroy();
    header("Location: login.php");
?>