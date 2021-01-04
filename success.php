<?php 
    $title = 'Success';
    include 'includes/header.php';
?>
    <h1 class="text-center text-success">You have been registered</h1>
    
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_POST['companyName']; ?></h5>
        <h6 class="card-subtitle"><?php echo $_POST['position'];?></h6>
        <p class="card-text">City<?php echo " ". $_POST['city'];?></p>
        <p class="card-text">Date of sending the application<?php echo " ". $_POST['doa'];?></p>
        <p class="card-text">Contact mail<?php echo " ". $_POST['contactMail'];?></p>
        <p class="card-text">Notes<?php echo " ". $_POST['notes'];?></p>
        <p class="card-text">Application status<?php echo " ". $_POST['status'];?></p>
        
        <a href="applications.php" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>
    <?php 
        //Ispisivanje
       
    ?>

<?php 
    include 'includes/footer.php';
?>