    <?php
        include 'includes/header.php';
        echo '<h1>Please enter your application</h1>';
        
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
  
    </form>
        <form>
        <div class="form-group">
            <label for="companyName">Company name</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Ubisoft">
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="QA intern">
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="contactMail">Contact mail</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" placeholder="Belgrade">
        </div>
    </div>
        <div class="form-group">
        <label for="exampleFormControlTextarea1">Notes</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
        <!--Status-->
    <label name = 'Status'>Application status</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
        <label class="form-check-label" for="exampleRadios1">
        Accepted
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
        <label class="form-check-label" for="exampleRadios2">
        Denied
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
        <label class="form-check-label" for="exampleRadios3">
        Waiting for the response
        </label>
    </div>
    </div>
    <button type="submit" class="btn btn-primary">INSERT</button>
    <button type="button" class="btn btn-warning">UPDATE</button>
    <button type="button" class="btn btn-danger">DELETE</button>
    </form>

    

    <?php
        $companyName = "Proba";
        $position = "Praksa";
        $webAddress = "Adresa";
        $contactMail = "Mail";
        $status = "1";
        $applicationDate = date("d/m/Y");
        $notes ="Notes";
        //Verifikacija forme
        function verificate(){
            if(verificateCompanyName() && verificateMail() && verificatePosition() 
                && verificatePosition() && verificateStatus())
                return true;
            return false;

        }
        function verificateCompanyName(){
            if($companyName!=null && $companyName.is_string())
                return true;
        }
        function verificatePosition(){

        }
        function verificateMail(){

        }
        function verificateStatus(){

        }
    ?>
    

    <?php 
        require 'includes/footer.php';    
    ?>