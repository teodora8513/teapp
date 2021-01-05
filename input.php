    <?php
        $title = "Input page";
        include 'includes/header.php';
        require_once 'db/conn.php';
        echo '<h1>Please enter your application</h1>';
        $result = $crud->getStatus();
    ?>
    <!--Labele i input polja za formu
    <label>Name of the company:</label>
    <input name = 'Name'><br/></input>
    <label>Position:</label>
    <input name = 'Position'><br/></input>
    <label>Company's website:</label>
    <input name = 'Website'><br/></input>
    <label>Contact mail:</label>
    <input name = 'Mail'><br/></input>
    <label>Application status:</label>
    <input name = 'Status'><br/></input>
    <label>Application date:</label>
    <input name = 'Date'><br/></input>
    <label>Notes:</label>
    <input name = 'Notes'><br/></input>-->
    
    <!--Form-->
  
    
        <form method ="post" action ="success.php">
        <div class="form-group">
            <label for="companyName">Company name</label>
            <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Ubisoft">
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control" id="position" name="position" placeholder="QA intern">
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="contactMail">Contact mail</label>
            <input type="email" class="form-control" id="contactMail" name="contactMail"  placeholder="Email">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="Belgrade">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="doa">Date of sending the application</label>   <!--Date of application-->
        <input type="text" class="form-control" id="doa" name="doa" >
        </div>
    </div>
        <div class="form-group">
        <label for="notes">Notes</label>
        <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
    </div>
    <div class="form-group">
        <!--Status-->
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
    </div>
    <button type="submit" class="btn btn-primary " name="submit">SUBMIT</button>
    
    </form>

    

    
    

    <?php 
        require 'includes/footer.php';    
    ?>