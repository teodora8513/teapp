<?php //Proveravamo autentikaciju
    if(!isset($_SESSION['userid']))
    {
        header("Location: login.php");
    }
?>