<?php 
    $title = "View application";
    include 'includes/header.php';
    require_once 'db/conn.php';
    //Get application by id
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $result = $crud->getApplicationDetails($id);

        }else{
            echo "<h1 class='text-danger'>Please check details and try again</h1>";
    }
?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $result['company_name']; ?></h5>
            <h6 class="card-subtitle"><?php echo $result['position'];?></h6>
            <p class="card-text">City:<?php echo " ". $result['city'];?></p>
            <p class="card-text">Date of sending the application:<?php echo " ". $result['doa'];?></p>
            <p class="card-text">Contact mail:<?php echo " ". $result['contact_mail'];?></p>
            <p class="card-text">Notes:<?php echo " ". $result['notes'];?></p>
            <p class="card-text">Application status:<?php echo " ". $result['status_id'];?></p>
            
            <a href="applications.php" class="btn btn-primary">Go back</a>
        </div>
        </div>
        <?php 
            
        
    ?>


<?php
    include 'includes/footer.php';
?>