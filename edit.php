
    <?php
        $title = "Edit application";
        include 'includes/header.php';
        require_once 'includes/auth_check.php';
        require_once 'db/conn.php';
        echo '<h1>Please update your application</h1>';
        $result = $crud->getStatus();
        
        if(!isset($_GET['id'])){
            //echo '<h1 class="text-danger">Error - can not edit the application</h1>';
            include 'errorMessages.php';
        }else{
            $id = $_GET['id'];
            $application =$crud->getApplicationDetails($id);
        
    ?>
   
    <!--Form-->
  
    
        <form method ="post" action ="editpost.php">
        <!--Sakriven id od korsinika-->
        <input type="hidden" name="id" value="<?php echo $application['application_id'] ?>"/> 
        <div class="form-group">
            <label for="companyName">Company name</label>
            <input type="text" class="form-control" value="<?php echo $application['company_name'] ?>"
                     id="companyName" name="companyName" 
                    >
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control" value="<?php echo $application['position']?>"
                    id="position" name="position" placeholder="QA intern">
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="contactMail">Contact mail</label>
            <input type="email" class="form-control" value="<?php echo $application['contact_mail']?>"
                    id="contactMail" name="contactMail"  placeholder="Email">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="city">City</label>
        <input type="text" class="form-control" value="<?php echo $application['city']?>"
                id="city" name="city" placeholder="Belgrade">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="doa">Date of sending the application</label>   <!--Date of application-->
        <input type="text" class="form-control" value="<?php echo $application['doa']?>"
                 id="doa" name="doa" >
        </div>
    </div>
        <div class="form-group">
        <label for="notes">Notes</label>
        <textarea class="form-control" value="<?php echo $application['notes']?>"
                 id="notes" name="notes" rows="3"></textarea>
    </div>
    <!--<div class="form-group">
        Status
    <label name = "status">Application status</label>
    <div class="form-check">
        <input value="1" class="form-check-input" type="radio" name="status" id="status" value="Accepted" checked>
        <label class="form-check-label" for="status">
        Accepted
        </label>
    </div>
    <div class="form-check">
        <input value="6" class="form-check-input" type="radio" name="status" id="status" value="Denied">
        <label class="form-check-label" for="status">
        Denied
        </label>
    </div>
    <div class="form-check">
        <input value="7" class="form-check-input" type="radio" name="status" id="status" value="Waiting">
        <label class="form-check-label" for="exampleRadios3">
        Waiting for the response
        </label>
    </div>
    </div>-->
    <div class="form-group">
            <label for="status">Application status</label>
            <select class="form-control" id="status" name="status">
                <?php 
                    while($r=$result->fetch(PDO::FETCH_ASSOC)){
                ?>
                <option value="<?php echo $r['status_id']?>"
                <?php if($r['status_id']== $application['status_id']) echo 'selected'?>>
                <?php echo $r['name']; ?></option>
                <?php } ?>

            </select>
    </div>
    <button type="submit" name = "submit" class="btn btn-warning">UPDATE</button>
    <a href="applications.php" class="btn btn-danger">CANCEL</a>
    </form>

    

    <?php
        }
    ?>
    

    <?php 
        require 'includes/footer.php';    
    ?>