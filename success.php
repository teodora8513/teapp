<?php 
    $title = 'Success';
    include 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){    //da li varijabla postoji na stranici
        $cname = $_POST['companyName'];
        $position= $_POST['position'];
        $city= $_POST['city'];
        $notes= $_POST['notes'];
        $status= $_POST['status'];
        $cmail= $_POST['contactMail'];
        $doa= $_POST['doa'];
        $isSuccess  =$crud->insert($cname, $position, $city, $doa, $cmail, $notes, $status);    //vraca true/false
        
        if($isSuccess){
            //echo '<h1 class="text-center text-success">You have submited the application</h1>';
            include 'successMessage.php';
        }
        else{
            //echo '<h1 class="text-center text-danger">There was an error</h1>';
            include 'errorMessages.php';
        }
    }    
?>
    
    
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_POST['companyName']; ?></h5>
        <h6 class="card-subtitle"><?php echo $_POST['position'];?></h6>
        <p class="card-text">City:<?php echo " ". $_POST['city'];?></p>
        <p class="card-text">Date of sending the application:<?php echo " ". $_POST['doa'];?></p>
        <p class="card-text">Contact mail:<?php echo " ". $_POST['contactMail'];?></p>
        <p class="card-text">Notes:<?php echo " ". $_POST['notes'];?></p>
        <p class="card-text">Application status:<?php echo " ". $_POST['status'];?></p>
        
        <!--<a href="applications.php" class="btn btn-primary">Go back</a>-->
        <a id="button" class="btn btn-primary" href="applications.php">Go back</a></p>
            <p id="container"><!-- currently it's empty --></p>

            <!-- including jQuery from the google cdn -->
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

            <script type="text/javascript">
            //Skripta
            $(document).ready(function(){
                $('a#button').click(function(){
                    $.ajax({
                        url: this.href,
                        type: 'GET',
                        dataType: 'html',
                        success: function (data) {
                            $('#container').html(data);
                        }
                    });
                });
            });
</script>
    </div>
    </div>
    <?php 
        //Ispisivanje
       
    ?>

<?php 
    include 'includes/footer.php';
?>