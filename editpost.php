<?php
    require_once 'db/conn.php';
    
    //Saljemo sve podatke iz edit-a u bazu
    if(isset($_POST['submit'])){    //da li varijabla postoji na stranici
        $id = $_POST['id'];
        $cname = $_POST['companyName'];
        $position= $_POST['position'];
        $city= $_POST['city'];
        $notes= $_POST['notes'];
        $status= $_POST['status'];
        $cmail= $_POST['contactMail'];
        $doa= $_POST['doa'];
        

    //Zovi crud funkciju
    $result = $crud->editApplication($id,$cname, $position,$city, $doa, $cmail, $notes,$status);
    //Redirekcija na input.php
        if($result){
            header("Location: applications.php");
        }
        else
            echo 'Error';
        
        
    } else{
            echo 'Error';
        }
    
?>