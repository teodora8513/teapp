<?php
    require_once 'db/conn.php';
    require_once 'includes/auth_check.php';
    if(!$_GET['id']){
        echo 'error';
    }else{
        //Get id values
        $id =$_GET['id'];
        //Call delete function
        $result = $crud ->deleteApplication($id);

        if($result){
            //Redirect
            header("Location: applications.php");
        }
        else{
            echo 'error';
        }
    }
?>